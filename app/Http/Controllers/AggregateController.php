<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AggregateController extends Controller
{
    //
    function operations()
    {
       // return DB::table('people')->sum('id');
       // return DB::table('people')->min('id');
        return DB::table('people')->max('name');
    }
}
