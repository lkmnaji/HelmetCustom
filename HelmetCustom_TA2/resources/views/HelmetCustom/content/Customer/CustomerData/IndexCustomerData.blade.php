@extends('HelmetCustom.MasterCustomer')
@section('title' | 'Profile Customer')

@section('HelmetCustom.content.Customer')
<div class="container c1index">    
    <h1 id="p1index">Profile Customer</h1>
    <hr>
    <h4 id="nama_cus">{{ Auth::user()->name }}</h4><br>
    <p id="email_cus">{{ Auth::user()->email }}</p>

    <h4>Alamat Customer</h4><br>
    
</div>


@endsection
