<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\People;

class PeoplesController extends Controller
{
    //
    function show()
    {
        $data= People::all();
        return view('lists',['peoples'=>$data]);
    }
}
