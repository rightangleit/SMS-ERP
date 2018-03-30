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
    return view('Admin.dashboard');
});
Route::get('/insert_result', function () {
    return view('Admin.insert_result');
});
Route::get('/search_result', function () {
    return view('Admin.search_result');
});
Route::get('/show_info', function () {
    return view('Admin.show_info');
});
Route::get('/show_result', function () {
    return view('Admin.show_result');
});
Route::get('/stu_info_new', function () {
    return view('Admin.stu_info_new');
});