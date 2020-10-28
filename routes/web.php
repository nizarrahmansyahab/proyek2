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
Route::get('/layout', function () {
    return view('admin.layout');
});
Route::get('/specialsoffer', function () {
    return view('specialsoffer');
});
Route::get('/delivery', function () {
    return view('delivery');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/specialsoffer2', function () {
    return view('specialsoffer2');
});
Route::get('/delivery2', function () {
    return view('delivery2');
});
Route::get('/contact2', function () {
    return view('contact2');
});
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/produk', function () {
    return view('produk');
});
Route::get('/kategori', function () {
    return view('kategori');
});
Route::get('/promo', function () {
    return view('promo');
});
Route::get('/login', function () {
    return view('login');
});
