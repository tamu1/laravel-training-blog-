<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function loadView($user)
    {
        return view('users',['user'=>$user]);
    }
}
