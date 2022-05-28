<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Fares;
class Category extends Model
{
    protected $fillable = [
        'veh_image','veh_name','max_passanger','max_luggage','veh_extra_id'
    ];



    //////Relation with Fare ///////////////////

    public function fare()
    {
        return $this->hasOne(Fares::class,'veh_category_id','id');
    }
}
