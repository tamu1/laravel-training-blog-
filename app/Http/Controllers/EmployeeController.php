<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    //
    function getData()
    {
        return DB::table('employee')
        ->join('company','employee_id','=','company.employee_id')
        ->where('employee.name','peter')
        ->select()
        ->get();
        

    
    }
}
