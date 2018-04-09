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


Route::post('/show_info_class', 'AdminController@show_info_class');
Route::post('/show_info', 'AdminController@show');
Route::post('/atten_new', 'AdminController@atten_new_show');
Route::PUT('/show_info2/{show_info2}', 'AdminController@update2');
Route::PUT('/show_info1/{show_info1}', 'AdminController@update1');
Route::PUT('/show_info/{show_info}', 'AdminController@update');
Route::get('/show_info', 'AdminController@show');
Route::get('/show_info_all', 'AdminController@show_all');
Route::get('/atten_new', 'AdminController@atten_new');
Route::get('/show_result', function () {
    return view('Admin.show_result');
});
/*Route::get('/stu_info_new', 'AdminController@create');*/
Route::resource('/stu_info_new', 'AdminController');
//Route::resource('/show_info', 'AdminController');