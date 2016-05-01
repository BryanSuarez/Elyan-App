<?php

namespace Elyan\Http\Controllers;

use Auth;
use Elyan\Models\User;
use Illuminate\Http\Request;

/**
 * Clase autenticacion
 */
class AuthController extends Controller {

    public function getSignup() {
        return view('auth.signup');
    }

    public function postSignup(Request $request) {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'nombreusuario' => 'required|unique:users|max:20',
            'password' => 'required|min:6',
        ]);

        User::create([
            'email' => $request->input('email'),
            'nombreusuario' => $request->input('nombreusuario'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()
                        ->route('home')
                        ->with('info', 'Usuario registrado en el Sistema, ahora puedes iniciar sesión.');
    }

    public function getSignin() {
        return view('auth.signin');
    }

    public function postSignin(Request $request) {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))) {
            return redirect()->back()->with('info', 'Lo sentimos, tus credenciales no coinciden con nuestros registros');
        }
        return redirect()->route('home')->with('info', 'Bienvenid@ al foro del Instituto Superior Tecnológico ISPADE');
    }

    public function getSignout(){
        Auth::logout();
        return redirect()->route('home')->with('info', 'Has cerrado tu sesión. Que tengas un buen día.');
    }

}
