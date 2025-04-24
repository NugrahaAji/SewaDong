<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('signin-up', function () {
    return view('frontend.signin-up');
});
Route::get('login', function () {
    return view('frontend.login');
});
Route::get('signin', function () {
    return view('frontend/signin');
});
Route::get('beranda', function () {
    return view('frontend/beranda');
});
Route::get('kategori-jasa', function () {
    return view('frontend/kategori-jasa');
});
Route::get('kategori-barang', function () {
    return view('frontend/kategori-barang');
});
Route::get('detail', function () {
    return view('frontend/detail');
});
Route::get('riwayat', function () {
    return view('frontend/riwayat');
});
Route::get('pembayaran', function () {
    return view('frontend/pembayaran');
});
Route::get('pembayaran-scan', function () {
    return view('frontend/pembayaran-scan');
});
Route::get('pengembalian', function () {
    return view('frontend/pengembalian');
});


