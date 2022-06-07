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

Route::get('/', function () {
    return view('pages.beranda');
});
Route::get('/course', function () {
    return view('pages.course');
});
Route::get('/article', function () {
    return view('pages.article');
});
Route::get('/faq', function () {
    return view('pages.faq');
});
