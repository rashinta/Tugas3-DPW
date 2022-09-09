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

Route::get('shop', function () {
    return view('shop');
});

Route::get('Template', function () {
    return view('Template.base');
});

Route::get('Beranda', function () {
    return view('Beranda');
});

Route::get('Produk', function () {
    return view('Produk');
});

Route::get('login', function () {
    return view('login');
});





