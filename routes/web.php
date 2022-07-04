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

Route::get('/home', function () {
    return view('home');
});

Route::get('/inventory-status', function () {
    return view('inventory-status');
});

Route::get('/detail-inventory', function () {
    return view('detail-inventory');
});

Route::get('/detail-ksa-2', function () {
    return view('detail-ksa-2');
});

Route::get('/add-bobot', function () {
    return view('add-bobot');
});

Route::get('/add-data-bulk', function () {
    return view('add-data-bulk');
});