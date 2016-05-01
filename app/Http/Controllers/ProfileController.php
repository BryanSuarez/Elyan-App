<?php

namespace Elyan\Http\Controllers;

use Auth;
use Elyan\Models\User;
use Illuminate\Http\Request;


class ProfileController extends Controller {

    public function getProfile($nombreusuario) {
        $user = User::where('nombreusuario', $nombreusuario)->first();
        if (!$user) {
            abort(404);
        }

        $estados = $user->statuses()->notReply()->get();

        return view('profile.index')
        ->with('user', $user)
        ->with('estados' , $estados)
        ->with('authUserIsFriend' , Auth::user()->isFriendsWith($user));
    }

    /**
     * Actualizar Perfil de usuario
     */
    public function getEdit() {
        return view('profile.edit');
    }

    public function postEdit(Request $request) {
        $this->validate($request, [
            'nombres' => 'alpha|max:50',
            'apellidos' => 'alpha|max:50',
            'localizacion' => 'max:20',
        ]);

        Auth::user()->update([
            'nombres' => $request->input('nombres'),
            'apellidos' => $request->input('apellidos'),
            'localizacion' => $request->input('localizacion'),
        ]);



        return redirect()
                        ->route('profile.edit')
                        ->with('info', 'Perfil actualizado');
    }

}
