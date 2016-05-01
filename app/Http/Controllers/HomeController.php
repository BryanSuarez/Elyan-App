<?php

namespace Elyan\Http\Controllers;

use Auth;
use Elyan\Models\Status;

/**
 * Clase principal
 */
class HomeController extends Controller {

    public function index() {
        if (Auth::check()) {
            $estados = Status::notReply()->where(function($consulta) {
                        return $consulta->where('user_id', Auth::user()->id)
                                ->orWhereIn('user_id', Auth::user()->friends()->lists('id'));
                    })
                    ->orderBy('created_at', 'desc')
                    ->paginate(5);
                    
            return view('timeline.index')
                    ->with('estados', $estados);
        }
        return view('home');
    }



}
