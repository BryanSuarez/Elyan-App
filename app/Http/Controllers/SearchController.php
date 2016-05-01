<?php

namespace Elyan\Http\Controllers;

use DB;
use Elyan\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getResults(Request $request)
    {
        $query = $request->input('query');
        if(! $query){
            return redirect()->route('home');
        }
        
        $users= User::where(DB::raw("CONCAT(nombres, '', apellidos)"), 'LIKE',
                 "%{$query}%")
                 ->orWhere('nombreusuario', 'LIKE', "%{$query}%")
                 ->get();
        return view('search.results')->with('users',$users);
    }
}