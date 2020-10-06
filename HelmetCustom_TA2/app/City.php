<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];

    public function invoice(){
        return $this->hasMany('invoice::class', 'city_id', 'id');
    }
}
