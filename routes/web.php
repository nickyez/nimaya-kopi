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
Route::group(['prefix'=>'member'],function(){
    Route::get('/login', [Member\MemberController::class,'login'])->name('memberLogin');
    Route::get('/register', [Member\MemberController::class,'register']);
    Route::post('/login/auth',[Member\MemberController::class,'authLogin']);
    Route::post('/register/auth',[Member\MemberController::class,'postRegister']);
    Route::post('/logout',[Member\MemberController::class,'logout']);
});
Route::post('/forum/create',[ForumController::class,'store']);
Route::post('/forum/like',[ForumController::class,'forumIsLiked'])->name('forum.liked');
Route::post('/forum/edit/{id}',[ForumController::class,'update']);
Route::delete('/forum/{id}',[ForumController::class,'destroy']);
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
    Route::resource('/forum-topic', Admin\ForumTopicController::class);
    Route::resource('/user', Admin\UserController::class);
    Route::resource('/socmed', Admin\SocmedController::class)->only(['index','update','edit']);
    Route::resource('/forum', Admin\ForumController::class)->only(['index','destroy']);
    Route::post('/class/store-image',[Admin\CourseClassController::class, 'storeImage'])->name('image.upload');
});