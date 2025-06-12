<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TokoController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('toko', TokoController::class);
// Route::get('toko/tambah', TokoController::class)->name('toko.tambah');
Route::resource('produk', ProductsController::class);


