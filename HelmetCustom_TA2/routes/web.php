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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('HelmetCustom')->group(function(){
    Route::resource('warna','HelmetCustom\Admin\WarnaController');
    Route::resource('metodetransaksi','HelmetCustom\Admin\MetodeTransaksiController');
    Route::resource('gallery','HelmetCustom\Admin\GalleryController');
    Route::resource('produk','HelmetCustom\Admin\ProdukController');
});
