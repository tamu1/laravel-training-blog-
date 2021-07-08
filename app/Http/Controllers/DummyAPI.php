<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyAPI extends Controller
{
    //
    function getData()
    {
        return ["name"=>"tamana","email"=>"tamu@gmail.com","address"=>"hp"];
        
    }
}
