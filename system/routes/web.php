<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

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

Route::get('Beranda', [HomeController::class, 'showBeranda']);
Route::get('login', [AuthController::class, 'login']);

Route::get('Produk', [ProdukController::class, 'index']);
Route::get('Produk/create', [ProdukController::class, 'create']);
Route::post('Produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);


Route::get('Template', function () {
    return view('Template.base');
});

Route::get('Beranda', function () {
    return view('Beranda');
});



Route::get('login', function () {
    return view('login');
});





