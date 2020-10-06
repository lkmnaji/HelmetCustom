<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = [];

    public function gallery_produk(){
        return $this->hasMany(Produk::class, 'foto_produk_id','id');
    }
}
