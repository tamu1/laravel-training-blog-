<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\people;

class PeopleController extends Controller
{
    //
    function show()
    {
        $data=People::paginate(3);
        return view('list',['peoples'=>$data]);
    }
}
