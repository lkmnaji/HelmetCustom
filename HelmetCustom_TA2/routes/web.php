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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/customer/home', 'Auth\CustomerLoginController@index')->middleware('auth:customer');
Route::get('/customer/login', 'Auth\CustomerLoginController@showLoginForm')->name('customer.loginform');
Route::get('/customer/register', 'Auth\CustomerLoginController@showRegisterForm')->name('customer.registerform');
Route::post('/customer/login', 'Auth\CustomerLoginController@Login')->name('customer.login');
Route::post('/customer/register', 'Auth\CustomerLoginController@register')->name('customer.register');
Route::get('/customer/logout', 'Auth\CustomerLoginController@logout')->name('customer.logout');

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

Route::prefix('CustomerHelmetCustom')->group(function(){
    Route::get('/HomePageCustomer',function(){return view('HelmetCustom.content.Customer.HomePageCustomer');})->name('index.customer');
    Route::resource('CustomerData','HelmetCustom\Customer\CustomerDataController');
});
