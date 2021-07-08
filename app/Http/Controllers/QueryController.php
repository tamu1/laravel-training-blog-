<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    //
    function operations()
    {
        //$data= DB::table('people')->get();
        //return view('query',['data'=>$data]);
        return DB::table('people')
        ->where('id',31)
        ->get();
        
    }
}
