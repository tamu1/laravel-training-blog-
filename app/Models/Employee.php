<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    function companyData()
    {
        return $this->hasOne('App\Models\Company');
    }

    function getDevice()
    {
        return $this->hasMany('App\Models\Device');
    }
}
