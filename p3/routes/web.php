<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainDashboardController;


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

Route::get('/', [MainDashboardController::class, 'index']);
Route::get('/home', [MainDashboardController::class, 'index']);

Route::get('/teste', [MainDashboardController::class, 'eloquentTest']);

Route::get('/profile', function () {
    return view('complete_profile');
});