<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class DeleteController extends Controller
{
    //
    function show()
    {
        $data=People::all();
        return view('show',['peoples'=>$data]);
       
    }
    function delete($id)
    {
        $data=People::find($id);
        $data->delete();
        return redirect('show')->with('status','Record has been deleted successfully');
        }

        function showData($id)
        {
            $data= People::find($id);
            return view('edit',['data'=>$data]);

        }

        function update(Request $req)
        {
            $data=People::find($req->id);
            $data->name=$req->name;
            $data->lastname=$req->lastname;
            $data->telephone=$req->telephone;
            $data->email=$req->email;
            $data->address=$req->address;
            $data->save();
            return redirect('show');
            
        }

    }
