<?php

namespace Elyan\Http\Controllers;

use Illuminate\Http\Request;

use Elyan\Http\Requests;

class CalendarController extends Controller
{
    public function getCalendar(){
        return view('calendario');
    }
}
