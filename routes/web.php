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

//blog routes
Route::resource('/controll_panel/blog', App\Http\Controllers\Admin\BlogController::class);
Route::post('/controll_panel/blog/delete', [App\Http\Controllers\Admin\BlogController::class, 'delete_post']);
Route::post('/controll_panel/blog/search', [App\Http\Controllers\Admin\BlogController::class, 'search_post']);
Route::post('/controll_panel/blog/list_subcategory', [App\Http\Controllers\Admin\BlogController::class,'list_subcategory']);


//office staff routes
Route::resource('/controll_panel/office-staff', App\Http\Controllers\Admin\OfficeStaffController::class);
Route::post('/controll_panel/office-staff/delete', [App\Http\Controllers\Admin\OfficeStaffController::class, 'delete_staff']);
Route::post('/controll_panel/office-staff/search', [App\Http\Controllers\Admin\OfficeStaffController::class, 'search_staff']);


//volunteers route
Route::resource('/controll_panel/volunteer', App\Http\Controllers\Admin\VolunteerController::class);
Route::post('/controll_panel/volunteer/delete', [App\Http\Controllers\Admin\VolunteerController::class, 'delete_volunteer']);
Route::post('/controll_panel/volunteer/search', [App\Http\Controllers\Admin\VolunteerController::class, 'search_volunteer']);


//life member routes

Route::resource('/controll_panel/life-member', App\Http\Controllers\Admin\LifeMemberController::class);
Route::post('/controll_panel/life-member/delete', [App\Http\Controllers\Admin\LifeMemberController::class, 'delete_member']);
Route::post('/controll_panel/life-member/search', [App\Http\Controllers\Admin\LifeMemberController::class, 'search_member']);


//Front Routes
Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index']);

