<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
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

Route::get('/login', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/produk', function () {
    return view('produk');
});
//Admin
Route::get('Admin/beranda', [HomeController::class, 'showBeranda']);

Route::prefix('Admin')->group(function(){
	Route::post('produk/filter', [ProdukController::class, 'filter']);
	Route::resource('produk', ProdukController::class);
	Route::resource('kategori', KategoriController::class);
	Route::resource('user', UserController::class);
});

//Route::get('Admin/produk', [ProdukController::class, 'index']);
//Route::post('Admin/produk', [ProdukController::class, 'store']);
//Route::get('Admin/produk/create', [ProdukController::class, 'create']);
//Route::get('Admin/produk/{produk}', [ProdukController::class, 'show']);
//Route::get('Admin/produk/{produk}/edit', [ProdukController::class, 'edit']);
//Route::put('Admin/produk/{produk}', [ProdukController::class, 'update']);
//Route::delete('Admin/produk/{produk}', [ProdukController::class, 'destroy']);


//Route::get('Admin/kategori', [KategoriController::class, 'index']);
//Route::post('Admin/kategori', [KategoriController::class, 'store']);
//Route::get('Admin/kategori/create', [KategoriController::class, 'create']);
//Route::get('Admin/kategori/{kategori}', [KategoriController::class, 'show']);
//Route::get('Admin/kategori/{kategori}/edit', [KategoriController::class, 'edit']);
//Route::put('Admin/kategori/{kategori}', [KategoriController::class, 'update']);
//Route::delete('Admin/kategori/{kategori}', [KategoriController::class, 'destroy']);


//Route::get('Admin/user', [UserController::class, 'index']);
//Route::post('Admin/user', [UserController::class, 'store']);
//Route::get('Admin/user/create', [UserController::class, 'create']);
//Route::get('Admin/user/{user}', [UserController::class, 'show']);
//Route::get('Admin/user/{user}/edit', [UserController::class, 'edit']);
//Route::put('Admin/user/{user}', [UserController::class, 'update']);
//Route::delete('Admin/user/{user}', [UserController::class, 'destroy']);


Route::get('Admin/login', [AuthController::class, 'showLogin']);
Route::post('Admin/login', [AuthController::class, 'LoginProcess']);
Route::get('Admin/register', [HomeController::class, 'showRegister']);
Route::get('Admin/logout', [AuthController::class, 'logout']);

//Client
Route::get('home', [ClientController::class, 'showHome']);
Route::post('home/filter', [ClientController::class, 'filter']);
Route::get('produk/{produk}', [ClientController::class, 'showProduk']);