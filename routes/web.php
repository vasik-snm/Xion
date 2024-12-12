<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeBannerController;
use App\Http\Controllers\HomeAboutController;
use App\Http\Controllers\HomeServiceController;
use App\Http\Controllers\HomeBlogController;
use App\Http\Controllers\HomeContactController;
use App\Http\Controllers\HomeFooterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

///// Admin Purpose /////

Route::get('/admin',[AdminController::class, 'index'])->name('admin');
Route::post('/admin_login',[AdminController::class, 'login'])->name('admin_login');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/logout_admin', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin_profile', [AdminController::class, 'profile'])->name('admin.profile');

// /// Admin-Bannser/Slider purpose /////

Route::get('/home_banner',[HomeBannerController::class,'index']);
Route::get('/edit_banner/{id}',[HomeBannerController::class,'edit']);
Route::post('/update_banner/{id}',[HomeBannerController::class,'update']);

///// Admin-About purpose /////

Route::get('/home_about_us',[HomeAboutController::class,'index']);
Route::get('/edit_about/{id}',[HomeAboutController::class,'edit']);
Route::post('/update_about/{id}',[HomeAboutController::class,'update']);

///// Admin-Service purpose /////

Route::get('/home_service',[HomeServiceController::class,'index']);
Route::get('/edit_service/{id}',[HomeServiceController::class,'edit']);
Route::post('/update_service/{id}',[HomeServiceController::class,'update']);
Route::get('/add_service', [HomeServiceController::class, 'create']);
Route::post('/store_service', [HomeServiceController::class, 'store']);
Route::delete('/delete_service/{id}', [HomeServiceController::class, 'destroy']);

///// Admin-Blog purpose /////

Route::get('/home_blog', [HomeBlogController::class, 'index']);
Route::get('/edit_blog/{id}',[HomeBlogController::class,'edit']);
Route::post('/update_blog/{id}',[HomeBlogController::class,'update']);

///// Admin-Contact purpose /////

Route::get('/home_contact', [HomeContactController::class, 'index']);

///// Admin-Footer purpose //////

Route::get('/home_footer', [HomeFooterController::class, 'index']);
Route::get('/edit_footer/{id}', [HomeFooterController::class, 'edit']);
Route::post('/update_footer/{id}', [HomeFooterController::class, 'update']);

/////////////////////////// Front Routes ///////////////////////////

Route::get('/',[FrontController::class,'index']);
Route::get('/service_detail/{id}',[FrontController::class,'service_detail']);

/////////////////////////// Contact-Email Send Routes ///////////////////////////

Route::post('/email_send',[FrontController::class,'sendEmail'])->name('email_send');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');

///////////////////////////////////////////////////////////////////////////////
