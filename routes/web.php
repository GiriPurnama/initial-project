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

Route::get('/detail-inventory-days', function () {
    return view('detail-inventory-days');
});

Route::get('/dashboard-expedition', function () {
    return view('dashboard-expedition');
});

Route::get('/detail-expedition', function () {
    return view('detail-expedition');
});

Route::get('/dashboard-waiting-receive', function () {
    return view('dashboard-waiting-receive');
});

Route::get('/dashboard-company', function () {
    return view('dashboard-company');
});

Route::get('/detail-company', function () {
    return view('detail-company');
});

Route::get('/console-loading', function () {
    return view('console-loading');
});

Route::get('/detail-dashboard', function () {
    return view('detail-dashboard');
});

Route::get('/incoming', function () {
    return view('incoming');
});

Route::get('/outgoing', function () {
    return view('outgoing');
});

Route::get('/print-order', function () {
    return view('print-order');
});

Route::get('/approval-expedition', function () {
    return view('approval-expedition');
});

Route::get('/tracking', function () {
    return view('tracking');
});
