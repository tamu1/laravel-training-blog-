<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class MutatorController extends Controller
{
    //
    function index()
    {
        $people=new People;
        $people->name="Doramon";
        $people->lastname="mon";
        $people->telephone="4646576";
        $people->email="dora@mail.com";
        $people->address="hydrabad";
        $people->save();
        

    }
}
