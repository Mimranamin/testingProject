<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $fillable = [
    'extra_type','extra_name','extra_price','extra_category'
    ];
}
