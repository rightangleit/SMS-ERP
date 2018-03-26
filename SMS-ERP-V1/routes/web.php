<?php

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
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/insert_result', function () {
    return view('insert_result');
});
Route::get('/search_result', function () {
    return view('search_result');
});
Route::get('/show_info', function () {
    return view('show_info');
});
Route::get('/show_result', function () {
    return view('show_result');
});
Route::get('/stu_info_new', function () {
    return view('stu_info_new');
});