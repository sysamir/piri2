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

Auth::routes();

//clientside
Route::get('/', function () {
    return view('client.index');
});
Route::get('/home', function () {
    return  Redirect::to('/profile');
});
Route::post('/adduser','client\UsersController@addUser');
Route::get('/profile','client\UsersController@profile');
Route::post('/profile','client\UsersController@companyCreate');
Route::get('/profile-edit','client\UsersController@personEdit');
Route::post('/profile-update','client\UsersController@personUpdate');

//registeration mail verification
Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'client\UsersController@confirm'
]);

//admin side
Route::group(['prefix' => 'dash', 'middleware' => 'auth'], function () {
    Route::resource('/kateqoriya','admin\CategoriesController');
    Route::get('/', function () {return view('admin.index');});
    Route::resource('/istifadechiler','admin\UsersController');

    //blog
    Route::resource('/blog-categories','admin\BlogCategoriesController');
    Route::resource('/blog-news','admin\BlogNewsController');
    Route::get('/blog-newsearch/search',['uses' => 'admin\BlogNewsController@getSearch','as' => 'search']);
});

// client side for logged in users
Route::group(['middleware' => 'auth'], function () {

  Route::resource('/tender','client\TenderController');
  Route::get('/xeberler', [
      'as' => 'xeberler',
      'uses' => 'client\BlogController@index'
  ]);
  Route::get('/xeber/{id}/{slug}','client\BlogController@post');

});


//clientside load modals
Route::get('/login-modal', function () {
    return view('client.layouts.login-modal');
});
Route::get('/register-modal', function () {
    return view('client.layouts.register-modal');
});
Route::get('/forgot-modal', function () {
    return view('client.layouts.forgot-modal');
});
