<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerData extends Model
{
    protected $guarded = [];

    public function CustomerData_email(){
        return $this->belongsTo(AkunCustomer::class,'email_customer_id','id');
    }
    public function CustomerData_province(){
        return $this->belongsTo(Province::class,'province_id','id');
    }
    public function CustomerData_city(){
        return $this->belongsTo(City::class,'city_id','id');
    }
    public function CustomerData_KodePos(){
        return $this->belongsTo(KodePos::class,'kode_pos_id','id');
    }

}