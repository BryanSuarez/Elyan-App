<?php

namespace Elyan\Http\Controllers;

use Auth;
use Elyan\Models\User;
use Illuminate\Http\Request;

class FriendController extends Controller {

    public function getIndex() {
        $friends = Auth::user()->friends();
        $requests = Auth::user()->friendRequests();
        return view('friends.index')
                        ->with('friends', $friends)
                        ->with('requests', $requests);
    }

    /**
     * Aggregar amigos
     */
    public function getAdd($nombreusuario) {
        $user = User::where('nombreusuario', $nombreusuario)->first();

        if (!$user) {
            return redirect()
                            ->route('home')
                            ->with('info', 'usuario no encontrado');
        }
        
        /*No agregarme a mí mismo*/
        if(Auth::user()->id === $user->id){
            return redirect()->route('home');
        }

        if (Auth::user()->hasFriendRequestPending($user) || $user->
                        hasFriendRequestPending(Auth::user())) {
            return redirect()
                            ->route('profile.index', ['nombreusuario' => $user->nombreusuario])
                            ->with('info', 'Solicitud enviada, espera la aceptación del usuario.');
        }

        if (Auth::user()->isFriendsWith($user)) {
            return redirect()
                            ->route('profile.index', ['nombreusuario' => $user->nombreusuario])
                            ->with('info', 'Ya eres amigo de este usuario');
        }
        Auth::user()->addFriend($user);
        return redirect()
                        ->route('profile.index', ['nombreusuario' => $nombreusuario])
                        ->with('info', 'Solicitud de amistad enviada.');
    }

    /* Aceptar solicitudes de amistad */

    public function getAccept($nombreusuario) {
        $user = User::where('nombreusuario', $nombreusuario)->first();
        if (!$user) {
            return redirect()
                            ->route('home')
                            ->with('info', 'usuario no encontrado');
        }
        
        if(!Auth::user()->hasFriendRequestRecived($user)){
            return redirect()->route('home');
        }
        
        Auth::user()->acceptFreiendRequest($user);
        
        return redirect()
                ->route('profile.index', ['nombreusuario' => $nombreusuario])
                ->with('info', 'Usuario agregado a tu lista de amigos');
    }

    public function postDelete($nombreusuario){
        $user = User::where('nombreusuario' , $nombreusuario)->first();

        if (!Auth::user()->isFriendsWith($user)) {
            return redirect()->back();
        }

        /*Eliminar amigo*/
        Auth::user()->deleteFriend($user);
        return redirect()->back()->with('info', 'Amistad eliminada correctamente');

    }

}
