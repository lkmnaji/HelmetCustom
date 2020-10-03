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



Route::get('/customer/home', 'Auth\CustomerLoginController@index')->middleware('auth:customer');
Route::get('/customer/login', 'Auth\CustomerLoginController@showLoginForm')->name('customer.loginform');
Route::get('/customer/register', 'Auth\CustomerLoginController@showRegisterForm')->name('customer.registerform');
Route::post('/customer/login', 'Auth\CustomerLoginController@Login')->name('customer.login');
Route::post('/customer/register', 'Auth\CustomerLoginController@register')->name('customer.register');
Route::get('/customer/logout', 'Auth\CustomerLoginController@logout')->name('customer.logout');


Route::resource('status', 'HelmetCustom\StatusProdukController');
Route::resource('order', 'HelmetCustom\OrderController');

Route::get('/home', 'HomeController@index')->name('home');

