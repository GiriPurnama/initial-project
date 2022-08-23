<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

// Route::get('/detail-content', function () {
//     return view('detail-content');
// });

Route::get('/detail-content/{id_name}', [DashboardController::class, 'detailDashboard']);

Route::get('/compare-content', function () {
    return view('compare-content');
});

Route::get('/survey', function () {
    return view('survey');
});

Route::get('/categorization', function () {
    return view('categorization');
});

Route::get('/taking-action', function () {
    return view('taking-action');
});

Route::get('/detail-task', function () {
    return view('detail-task');
});

Route::get('/manage-task', function () {
    return view('manage-task');
});

