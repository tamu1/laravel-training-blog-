<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\People;

class ModelController extends Controller
{
    //
    function getData(){
        return People::all();
        
        
    }
}
