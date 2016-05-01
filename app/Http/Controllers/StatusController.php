<?php

namespace Elyan\Http\Controllers;

use Auth;
use Elyan\Models\User;
use Elyan\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller {
    /* Publicar post */

    public function postStatus(Request $request) {
        $this->validate($request, [
            'estado' => 'required|max:500',
        ]);

        /* Crear el estado */
        Auth::user()->statuses()->create([
            'comentario' => $request->input('estado'),
        ]);

        return redirect()
                        ->route('home')
                        ->with('info', 'Tu post ha sido creado');
    }

    public function postReply(Request $request, $estadoId) {
        $this->validate($request, [
            "reply-{$estadoId}" => 'required|max:500',
                ], [
            'required' => 'El campo de respuesta no debe estar vacío.'
        ]);

        $estado = Status::notReply()->find($estadoId);

        if (!$estado) {
            return redirect()->route('home');
        }

        if (!Auth::user()->isFriendsWith($estado->user) && Auth::user()->id !==
                $estado->user->id) {
            return redirect()->route('home');
        }

        $reply = Status::create([
                    'comentario' => $request->input("reply-{$estadoId}"),
                ])->user()->associate(Auth::user());
                  
        $estado->replies()->save($reply);
        return redirect()->back();
    }

    /*Método para dar likes*/
    public function getLike($estadoId){
        $estado = Status::find($estadoId);

        /*Si no hay un like*/
        if (!$estado){
            return redirect()->route('home');
        }

        /*Si el like no es de un amigo*/
        if (!Auth::user()->isFriendsWith($estado->user)){
            return redirect()->route('home');
        }

        /*Si el comentario ya tiene like*/
        if(Auth::user()->hasLikedStatus($estado)){
            return redirect()->back();
        }

        /*Guardo el like en la BD*/
        $like = $estado->likes()->create([]);

        /*Asocio el like al usuario que le dió like*/
        Auth::user()->likes()->save($like);
        return redirect()->back();
    }
}
