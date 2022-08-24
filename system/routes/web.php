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
    return view('index');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/my-account', function () {
    return view('my-account');
});

Route::get('/shop-detail', function () {
    return view('shop-detail');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/tamplate', function () {
    return view('tamplate.base');
});

Route::get('/base', function () {
    return view('admin.base');
});

Route::get('/beranda', function () {
    return view('admin.beranda');
});

Route::get('/produk', function () {
    return view('admin.produk');
});

Route::get('/kategori', function () {
    return view('admin.kategori');
});

Route::get('/loginadmin', function () {
    return view('admin.loginadmin');
});

