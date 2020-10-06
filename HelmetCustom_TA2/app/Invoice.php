<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $guarded = [];

    // public function province(){
    //     return $this->belongsTo(Province::class, 'province_id', 'id');
    // }

    // public function city(){
    //     return $this->belongsTo(city::class, 'city_id', 'id');
    // }

    public function kodepos(){
        return $this->belongsTo(KodePos::class, 'kode_pos_id', 'id');
    }
}
