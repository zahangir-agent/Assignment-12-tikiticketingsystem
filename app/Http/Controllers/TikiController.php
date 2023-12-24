<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TikiController extends Controller
{
    function dashboard(){
        
        return view('myapps.dashboard');
    

    }
}
