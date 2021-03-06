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



Route::get('/', 'MainController')->name('main');

Route::resource('carts', 'CartController')->only(['index']);

Route::resource('products.carts', 'ProductCartController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
