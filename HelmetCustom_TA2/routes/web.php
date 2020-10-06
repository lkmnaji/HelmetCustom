<?php

use Illuminate\Support\Facades\Route;

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

<<<<<<< HEAD
// Route::get('/', function () {
//     return view('welcome');
// });
=======

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('admin/dashboard');
});
>>>>>>> 4bc9e7cf6b5fab491a9e729c3d83af3e5d3d1007

// Route::get('tesadmin', function () {
//     return view('HelmetCustom.MasterAdmin');
// });
// Route::get('tesdashboardadmin', function () {
//     return view('HelmetCustom.content.Admin.DashboardAdmin');
// });

// Route::get('tescustomer', function () {
//     return view('HelmetCustom.content.Customer.customer');
// });

// Auth::routes();


// Route::get('/customer/home', 'Auth\CustomerLoginController@index')->middleware('auth:customer');
// Route::get('/customer/login', 'Auth\CustomerLoginController@showLoginForm')->name('customer.loginform');
// Route::get('/customer/register', 'Auth\CustomerLoginController@showRegisterForm')->name('customer.registerform');
// Route::post('/customer/login', 'Auth\CustomerLoginController@Login')->name('customer.login');
// Route::post('/customer/register', 'Auth\CustomerLoginController@register')->name('customer.register');
// Route::get('/customer/logout', 'Auth\CustomerLoginController@logout')->name('customer.logout');


// Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
// Route::prefix('AdminHelmetCustom')->group(function(){
//     Route::resource('warna','HelmetCustom\Admin\WarnaController');
//     Route::resource('metodetransaksi','HelmetCustom\Admin\MetodeTransaksiController');
//     Route::resource('produk','HelmetCustom\Admin\ProdukController');
//     Route::resource('status', 'HelmetCustom\Admin\StatusProdukController');
//     Route::resource('order', 'HelmetCustom\Customer\OrderController');
// });

// Route::prefix('CustomerHelmetCustom')->group(function(){
//     Route::resource('CustomerData','HelmetCustom\Customer\CustomerDataController');
// });
=======
Route::prefix('HelmetCustom')->group(function(){
    Route::resource('warna','HelmetCustom\Admin\WarnaController');
    Route::resource('metodetransaksi','HelmetCustom\Admin\MetodeTransaksiController');
    Route::resource('gallery','HelmetCustom\Admin\GalleryController');
    Route::resource('produk','HelmetCustom\Admin\ProdukController');
    Route::resource('kodepos','HelmetCustom\Admin\KodePosController');
    Route::resource('invoice','HelmetCustom\Admin\InvoiceController');
    Route::resource('province', 'HelmetCustom\Admin\ProvinceController');
    Route::resource('city', 'HelmetCustom\Admin\CityController');
});
>>>>>>> 4bc9e7cf6b5fab491a9e729c3d83af3e5d3d1007
