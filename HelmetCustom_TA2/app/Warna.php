<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    protected $guarded = []; 

    public function warna_produk(){
        return $this->belongsToMany(Produk::class,'warna_produk_id','id');
    }
}
