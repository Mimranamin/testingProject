<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'reg_no','veh_category_id','veh_model','veh_make','veh_desc'
    ];
}
