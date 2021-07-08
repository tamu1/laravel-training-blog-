<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class AccessorsController extends Controller
{
    //
    function index()
    {
    return People::all();

    }
}
