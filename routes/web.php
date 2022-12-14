<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarProdukController;
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

//Halaman Homepage
Route::get('/', [HomeController::class,'index']);
//Halaman Profile
Route::get('profile', [ProfileController::class,'index']);

//Halaman Kategori
Route::get('kategori', [KategoriController::class,'index']);
Route::get('kategoribaru', [KategoriController::class,'databaru']);
Route::post('kategoriproduk', [KategoriController::class,'savedatabaru']);
//Halaman Edit Kategori
Route::get('editkategori/{id}', [KategoriController::class,'editkategori']);
Route::patch('kategoriproduk', [KategoriController::class, 'saveeditkategori']);
Route::delete('kategoriproduk', [KategoriController::class, 'hapuskategori']);

// Halaman Daftar Produk
Route::get('daftarproduk', [DaftarProdukController::class,'index']);
Route::get('daftarprodukbaru', [DaftarProdukController::class,'databaru']);
Route::post('savedaftarproduk', [DaftarProdukController::class,'savedatabaru']);

//Halaman Edit Daftar Produk
Route::get('editproduk/{id}', [DaftarProdukController::class,'editproduk']);
Route::patch('editProduk', [DaftarProdukController::class, 'saveeditproduk']);
Route::delete('editProduk', [DaftarProdukController::class, 'hapusproduk']);


