<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('client.index');
});

Auth::routes();


Route::group(['prefix' => 'dash', 'middleware' => 'auth'], function () {
    Route::get('/', function () {return view('admin.index');});
    Route::resource('/istifadechiler','SiteUsersController');
});

//modallar
Route::get('/login-modal', function () {
    return view('client.layouts.login-modal');
});
Route::get('/register-modal', function () {
    return view('client.layouts.register-modal');
});
Route::get('/forgot-modal', function () {
    return view('client.layouts.forgot-modal');
});
