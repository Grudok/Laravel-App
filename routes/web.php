<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\UnityController;
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

Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/unity',[UnityController::class, 'unity']);

Route::get('/', function () {
    return view('main.private');
});
