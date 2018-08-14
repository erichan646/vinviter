<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public $timestamps = false;

    /* Get the cities for the region */
    public function cities(){
        return $this->hasMany('App\City');
    }
}
