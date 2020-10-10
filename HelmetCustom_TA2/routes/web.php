<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

// Route::get('/',function(){
//     return view('auth/login');
// });

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/')->group(function(){
    Route::get('admin', function () {
        return view('welcomeadmin');
        })->name('welcome');
    Route::get('customer', function (){
        return view('welcomecustomer');
        })->name('welcome');
});

Route::get('/customer/home', 'Auth\CustomerLoginController@index')->middleware('auth:customer');
Route::get('/customer/login', 'Auth\CustomerLoginController@showLoginForm')->name('customer.loginform');
Route::get('/customer/register', 'Auth\CustomerLoginController@showRegisterForm')->name('customer.registerform');
Route::post('/customer/login', 'Auth\CustomerLoginController@Login')->name('customer.login');
Route::post('/customer/register', 'Auth\CustomerLoginController@register')->name('customer.register');
Route::get('/customer/logout', 'Auth\CustomerLoginController@logout')->name('customer.logout');


// ADMIN DASBOARD
Route::group(['middleware' => 'auth'], function(){
    Route::prefix('AdminHelmetCustom')->group(function(){
        Route::get('/DashboardAdmin',function(){return view('HelmetCustom.content.Admin.DashboardAdmin');})->name('index.admin');
        Route::resource('warna','HelmetCustom\Admin\WarnaController');
        Route::resource('metodetransaksi','HelmetCustom\Admin\MetodeTransaksiController');
        Route::resource('produk','HelmetCustom\Admin\ProdukController');
        Route::resource('status', 'HelmetCustom\Admin\StatusProdukController');
        Route::resource('order', 'HelmetCustom\Customer\OrderController');
        Route::resource('kodepos', 'HelmetCustom\Admin\KodePosController');
        Route::resource('province', 'HelmetCustom\Admin\ProvinceController');
        Route::resource('customer', 'HelmetCustom\Customer\CustomerDataController');
        Route::resource('invoice', 'HelmetCustom\Customer\InvoiceContoller');
        Route::resource('Order', 'HelmetCustom\Customer\OrderController');
    });
});


// ADMIN CUSTOMER
Route::prefix('helmetcustom')->group(function(){    
    Route::get('/homehelmet','HelmetCustom\Customer\homefrontendController@homeFrontend')->name('homefrontend');
    Route::resource('customer', 'HelmetCustom\Customer\CustomerDataController');
    Route::resource('invoice', 'HelmetCustom\Customer\InvoiceContoller');
    Route::resource('order', 'HelmetCustom\Customer\OrderController');
});
