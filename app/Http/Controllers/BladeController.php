<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    //
    function loadView1()
    {
        $data=['tamana','sam','tanu'];
       // return view("user2",["name"=>"sam"]);
       return view("user2",["users"=>$data]);
    }
    
}
