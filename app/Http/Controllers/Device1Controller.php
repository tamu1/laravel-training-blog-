<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class Device1Controller extends Controller
{
    //
    function add( Request $req)
    {
        $device=new Device;
        $device->name=$req->name;
        $device->employee_id=$req->employee_id;
       $result= $device->save();
       if($result)
       {

        return ["result"=>"data has been saved"];
       }
       else{
           return["result"=>"Operation failed"];
       }

       
    }
}
