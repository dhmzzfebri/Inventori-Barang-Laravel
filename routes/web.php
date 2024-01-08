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
    return view('login');
});

Route::get('/stock', function () {
    return view('stock');
});
Route::get('/brgmasuk', function () {
    return view('masuk');
});
Route::get('/brgkeluar', function () {
    return view('keluar');
});
Route::get('/log in', function () {
    return view('login');
});
