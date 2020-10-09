<?php

namespace App\Http\Controllers\HelmetCustom\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;

class homefrontendController extends Controller
{
    public function homeFrontend(){
        $data = Produk::orderBy('created_at','DESC')->where('status_produk_id', 1)->take(6)->get();
        return view('HelmetCustom.content.Customer.HomePageCustomer',compact('data'));
    }
}
