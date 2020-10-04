<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $guarded = [];

    public function produk_foto(){
        return $this->belongsTo(Gallery::class, 'foto_produk_id','id');
    }
    public function produk_warna(){
        return $this->belongsToMany(Warna::class,'pilihan_warnas','produk_id','warna_id');
    }
    public function produk_status(){
        return $this->belongsTo(Status::class, 'status_id','id');
    }
}
