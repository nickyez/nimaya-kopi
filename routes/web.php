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


/*
|--------------------------------------------------------------------------
| Route untuk Guest (tidak login)
|--------------------------------------------------------------------------
*/
Route::get('/', [LandingPageController::class,'index']);
Route::get('/course', [LandingPageController::class,'course']);
Route::get('/article', [LandingPageController::class,'article']);
Route::get('/faq', [LandingPageController::class,'faq']);
Route::get('/forum', [LandingPageController::class,'forum']);
/*
|--------------------------------------------------------------------------
| Route untuk Role Member
|--------------------------------------------------------------------------
*/
Route::get('/member/login', [Member\MemberController::class,'login'])->name('memberLogin');
Route::get('/member/register', [Member\MemberController::class,'register']);
Route::post('/member/login/auth',[Member\MemberController::class,'authLogin']);
Route::post('/member/register/auth',[Member\MemberController::class,'postRegister']);
Route::group(['middleware'=>'member','prefix'=>'course'],function(){
    Route::get('/detail/{id}', [LandingPageController::class,'courseDetail']);
    Route::get('/detail/{id}/{nama_kelas}', [LandingPageController::class,'courseDetail']);
});
/*
|--------------------------------------------------------------------------
| Route untuk Role Admin
|--------------------------------------------------------------------------
*/
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