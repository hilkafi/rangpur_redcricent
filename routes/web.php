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


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
//Admin Routes
Route::get('/controll_panel', [App\Http\Controllers\Admin\DashboardController::class, 'index']);


//Front Routes
Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index']);
