<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    function storeM(Request $req){
       // return $req->input();
       $data=$req->input('user');
       $req->session()->flash('user',$data);
       return redirect('store');
    }
}
