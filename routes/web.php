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

//category routes
Route::resource('/controll_panel/category', App\Http\Controllers\Admin\CategoryController::class);
Route::post('/controll_panel/category/delete', [App\Http\Controllers\Admin\CategoryController::class, 'delete']);
Route::post('/controll_panel/category/search', [App\Http\Controllers\Admin\CategoryController::class, 'search']);

//category routes
Route::resource('/controll_panel/sub-category', App\Http\Controllers\Admin\SubCategoryController::class);
Route::post('/controll_panel/sub-category/delete', [App\Http\Controllers\Admin\SubCategoryController::class, 'delete']);
Route::post('/controll_panel/sub-category/search', [App\Http\Controllers\Admin\SubCategoryController::class, 'search']);


//Front Routes
Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index']);

