<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $guarded = [];

    public function invoice(){
        return $this->hasMany('invoice::class', 'province_id', 'id');
    }
}
