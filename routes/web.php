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

//executive committees
Route::resource('/controll_panel/executive-committee/', App\Http\Controllers\Admin\ExecutiveCommitteeController::class);
Route::get('/controll_panel/executive-committee/{id}/edit', [App\Http\Controllers\Admin\ExecutiveCommitteeController::class, 'edit']);
Route::put('/controll_panel/executive-committee/{id}', [App\Http\Controllers\Admin\ExecutiveCommitteeController::class, 'update']);
Route::post('/controll_panel/executive-committee/delete', [App\Http\Controllers\Admin\ExecutiveCommitteeController::class, 'delete']);
Route::post('/controll_panel/executive-committee/search', [App\Http\Controllers\Admin\ExecutiveCommitteeController::class, 'search']);



//volunteers route
Route::resource('/controll_panel/volunteer', App\Http\Controllers\Admin\VolunteerController::class);
Route::post('/controll_panel/volunteer/delete', [App\Http\Controllers\Admin\VolunteerController::class, 'delete_volunteer']);
Route::post('/controll_panel/volunteer/search', [App\Http\Controllers\Admin\VolunteerController::class, 'search_volunteer']);
Route::post('/controll_panel/volunteer/approve-request', [App\Http\Controllers\Admin\VolunteerController::class, 'approve_volunteer']);
Route::get('/controll_panel/upazila_volunteers/{id}', [App\Http\Controllers\Admin\VolunteerController::class, 'upazila_volunteers']);
Route::get('/volunteer/pending-request', [App\Http\Controllers\Admin\VolunteerController::class, 'pending_show']);
Route::get('/volunteer/executive', [App\Http\Controllers\Admin\VolunteerController::class, 'executive_show']);

Route::get('/controll_panel/rcy_volunteers', [App\Http\Controllers\Admin\VolunteerController::class, 'rcy_volunteers']);

//Youth Executive Committee
Route::resource('/controll_panel/youth-executive', App\Http\Controllers\Admin\YouthExecutiveController::class);
Route::post('/controll_panel/youth-executive/delete', [App\Http\Controllers\Admin\YouthExecutiveController::class, 'delete_volunteer']);
Route::post('/controll_panel/youth-executive/search', [App\Http\Controllers\Admin\YouthExecutiveController::class, 'search_volunteer']);

//life member routes

Route::resource('/controll_panel/life-member', App\Http\Controllers\Admin\LifeMemberController::class);
Route::post('/controll_panel/life-member/delete', [App\Http\Controllers\Admin\LifeMemberController::class, 'delete_member']);
Route::post('/controll_panel/life-member/search', [App\Http\Controllers\Admin\LifeMemberController::class, 'search_member']);
Route::post('/controll_panel/life-member/approve', [App\Http\Controllers\Admin\LifeMemberController::class, 'approve_member']);
Route::get('/controll_panel/life-member/approve/list', [App\Http\Controllers\Admin\LifeMemberController::class, 'show_pending']);
Route::get('/executive-list', [App\Http\Controllers\Admin\LifeMemberController::class, 'show_executive']);

//Speech routes

Route::resource('/controll_panel/speech', App\Http\Controllers\Admin\SpeechController::class);
Route::post('/controll_panel/speech/delete', [App\Http\Controllers\Admin\SpeechController::class, 'delete']);
Route::post('/controll_panel/speech/search', [App\Http\Controllers\Admin\SpeechController::class, 'search']);

//Project routes

Route::resource('/controll_panel/project', App\Http\Controllers\Admin\ProjectController::class);
Route::post('/controll_panel/project/delete', [App\Http\Controllers\Admin\ProjectController::class, 'delete']);
Route::post('/controll_panel/project/search', [App\Http\Controllers\Admin\ProjectController::class, 'search']);

//Page Routes
Route::resource('/controll_panel/page', App\Http\Controllers\Admin\PageController::class);
Route::post('/controll_panel/page/delete', [App\Http\Controllers\Admin\PageController::class, 'delete']);
Route::post('/controll_panel/page/search', [App\Http\Controllers\Admin\PageController::class, 'search']);


//donate us routes
Route::resource('/controll_panel/donate_us', App\Http\Controllers\Admin\DonateUsController::class);
Route::get('/controll_panel/donate-us-list', [App\Http\Controllers\Admin\DonateUsController::class,'show_pending']);
Route::post('/controll_panel/donate-us-approve', [App\Http\Controllers\Admin\DonateUsController::class,'approve_info']);

//Donate Get Blood routes

Route::resource('/controll_panel/donate_get_blood', App\Http\Controllers\Admin\DonateGetBloodController::class);
Route::post('/controll_panel/donate_get_blood/delete', [App\Http\Controllers\Admin\DonateGetBloodController::class, 'delete']);
Route::post('/controll_panel/donate_get_blood/search', [App\Http\Controllers\Admin\DonateGetBloodController::class, 'search']);
Route::post('/controll_panel/donate_get_blood/approve', [App\Http\Controllers\Admin\DonateGetBloodController::class, 'approve_info']);
Route::get('/donate-blood-list', [App\Http\Controllers\Admin\DonateGetBloodController::class, 'show_pending']);
//Social Media routes

Route::resource('/controll_panel/social_media', App\Http\Controllers\Admin\SocialMediaController::class);
Route::post('/controll_panel/social_media/delete', [App\Http\Controllers\Admin\SocialMediaController::class, 'delete']);
Route::post('/controll_panel/social_media/search', [App\Http\Controllers\Admin\SocialMediaController::class, 'search']);

//Messages
Route::get('controll_panel/messages', [App\Http\Controllers\Admin\SocialMediaController::class, 'messages']);
Route::get('controll_panel/show_messages/{id}', [App\Http\Controllers\Admin\SocialMediaController::class, 'show_messages']);

//Slider Routes

Route::resource('/controll_panel/slider', App\Http\Controllers\Admin\SliderController::class);
Route::post('/controll_panel/slider/delete', [App\Http\Controllers\Admin\SliderController::class, 'delete']);
Route::post('/controll_panel/slider/search', [App\Http\Controllers\Admin\SliderController::class, 'search']);


//Front Routes
Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index']);
Route::get('/single-blog/{id}', [App\Http\Controllers\Front\HomeController::class, 'single_blog']);
Route::get('/donate-us', [App\Http\Controllers\Front\HomeController::class, 'donate_us']);
Route::get('/donate-blood', [App\Http\Controllers\Front\HomeController::class, 'donate_blood']);
Route::get('/become-member', [App\Http\Controllers\Front\HomeController::class, 'become_member']);
Route::get('/become-volunteer', [App\Http\Controllers\Front\HomeController::class, 'become_voluteer']);
Route::get('/contact-us', [App\Http\Controllers\Front\HomeController::class, 'contact_us']);
Route::post('/contact-us/save', [App\Http\Controllers\Front\HomeController::class, 'contact_us_save']);
Route::get('/photo-gallery', [App\Http\Controllers\Front\HomeController::class, 'photo_gallery']);
Route::get('/video-gallery', [App\Http\Controllers\Front\HomeController::class, 'video_gallery']);
Route::get('/project/category/{id}', [App\Http\Controllers\Front\HomeController::class, 'show_project_category']);
Route::get('/category/{id}', [App\Http\Controllers\Front\HomeController::class, 'show_category']);
Route::get('/career', [App\Http\Controllers\Front\HomeController::class, 'career']);
Route::get('/page/{id}', [App\Http\Controllers\Front\HomeController::class, 'page']);
Route::get('/organizational-structure', [App\Http\Controllers\Front\HomeController::class, 'organizational_structure']);
Route::get('/partners', [App\Http\Controllers\Front\HomeController::class, 'partners']);
Route::get('/unit-braches', [App\Http\Controllers\Front\HomeController::class, 'unit_branches']);
Route::get('/managing-board', [App\Http\Controllers\Front\HomeController::class, 'managing_board']);
Route::get('/senior-management', [App\Http\Controllers\Front\HomeController::class, 'senior_management']);
Route::get('/single-project/{id}', [App\Http\Controllers\Front\HomeController::class, 'single_project']);
Route::get('/buy-souvenir-product', [App\Http\Controllers\Front\HomeController::class, 'buy_souvenir_product']);

//members
Route::get('/executive-committee', [App\Http\Controllers\Front\HomeController::class, 'executive_committee']);
Route::get('/life-member', [App\Http\Controllers\Front\HomeController::class, 'life_member']);
Route::get('/youth-executive', [App\Http\Controllers\Front\HomeController::class, 'youth_executive']);
Route::get('/rcy-volunteer', [App\Http\Controllers\Front\HomeController::class, 'rcy_volunteer']);
Route::get('/office-staff', [App\Http\Controllers\Front\HomeController::class, 'office_staff']);

// become volunteer route

Route::resource('/volunteer-form', App\Http\Controllers\BeAVolunteerController::class);
Route::resource('/member', App\Http\Controllers\BeAMemberController::class);
Route::get('/upazila_volunteer/{upazila}', [App\Http\Controllers\Front\HomeController::class, 'upazila_volunteer']);

//Not Found Route
Route::get('{path}', [App\Http\Controllers\Front\HomeController::class, 'not_found'])->where('path', '([A-z\d\-\/_.]+)');
