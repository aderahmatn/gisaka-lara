<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/produk', 'ProdukController@index');
Route::get('/promo', 'PromoController@index');
Route::get('/promo/{slug}', 'PromoController@show');
Route::get('/tentang-kami', 'AboutController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug}', 'BlogController@show');
Route::get('/bantuan', 'BantuanController@index');
Route::get('/hubungi-kami', 'ContactController@index');
Route::get('/daftar', 'AuthController@register');
Route::get('/login', 'AuthController@login');
Route::get('/logout', 'AuthController@logout');
Route::get('/dashboard', 'UserController@index');
