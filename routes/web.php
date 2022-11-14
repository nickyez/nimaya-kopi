<?php

namespace App\Http\Controllers;

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

Route::get('/', [LandingPageController::class,'index']);
Route::get('/course', [LandingPageController::class,'course']);
Route::get('/course/detail/{id}', [LandingPageController::class,'courseDetail']);
Route::get('/course/detail/{id}/{nama_kelas}', [LandingPageController::class,'courseDetail']);
Route::get('/article', [LandingPageController::class,'article']);
Route::get('/faq', [LandingPageController::class,'faq']);
Route::get('/member/login', function () {
    return view('member.page.login');
});
Route::get('/member/register', function () {
    return view('member.page.register');
});
Route::get('/forum', function () {
    return view('index.page.forum');
});
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/login', [AuthController::class,'login']);
Route::group(['middleware'=>'auth','prefix'=>'admin'], function(){
    Route::get('/', [AdminViewController::class,'index']);
    Route::post('/logout',[AuthController::class, 'logout']);
    Route::resource('/faq', Admin\FaqController::class);
    Route::resource('/article', Admin\ArticleController::class);
    Route::resource('/course', Admin\CourseController::class);
    Route::resource('/class', Admin\CourseClassController::class);
    Route::post('/class/store-image',[Admin\CourseClassController::class, 'storeImage'])->name('image.upload');
});