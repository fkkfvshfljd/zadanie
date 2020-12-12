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
    return view('home');
})->name('home');

Route::get('/order/all', 'App\Http\Controllers\OrderController@allData')->name('order_data');

Route::post('/order/submit', 'App\Http\Controllers\OrderController@submit')->name('order_form');
