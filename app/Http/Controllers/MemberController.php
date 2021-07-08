<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class MemberController extends Controller
{
    //
    function addData(Request $req)
    {
        $people= new People;
        $people->name=$req->name;
        $people->lastname=$req->lastname;
        $people->telephone=$req->telephone;
        $people->email=$req->email;
        $people->address=$req->address;
        $people->save();

    }
}
