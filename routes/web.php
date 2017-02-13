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


//search

Route::get('/search','client\TenderlerController@search');

//clientside
Route::get('/','HomeController@index');
Route::get('/home', function () {
    return  Redirect::to('/profile');
});
Route::post('/adduser','client\UsersController@addUser');


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
    Route::get('/tenders', [
        'as' => 'tenders',
        'uses' => 'admin\TenderController@index'
    ]);


    Route::post('/tenders-delete', [
        'as' => 'tendersDelete',
        'uses' => 'admin\TenderController@destroy'
    ]);

    Route::get('/tenders/{id}/edit','admin\TenderController@edit');
    Route::post('/tenders/{id}','admin\TenderController@update');

    //blog
    Route::resource('/blog-categories','admin\BlogCategoriesController');
    Route::resource('/blog-news','admin\BlogNewsController');
    Route::get('/blog-newsearch/search',['uses' => 'admin\BlogNewsController@getSearch','as' => 'search']);

    Route::get('/settings','admin\SettingsController@index');
    Route::post('/settings','admin\SettingsController@save');
});

// client side for logged in users
Route::group(['middleware' => 'auth'], function () {
  Route::resource('/tender','client\TenderController');

  Route::get('/profile','client\UsersController@profile');
  Route::post('/profile','client\UsersController@companyCreate');
  Route::get('/profile-edit','client\UsersController@profileEdit');
  Route::post('/profile-update','client\UsersController@profileUpdate');
});

//xeberler
Route::get('/xeberler', [
    'as' => 'xeberler',
    'uses' => 'client\BlogController@index'
]);
Route::get('/xeber/{id}/{slug}','client\BlogController@post');
Route::get('/xeber/axtar','client\BlogController@search');
Route::get('/xeberler/kateqoriya/{id}/{slug}','client\BlogController@category');

Route::get('/shirket/{id}','client\UsersController@companyPage');

Route::get('/elaqe', [
    'as' => 'elaqe',
    'uses' => 'client\ContactController@index'
]);
Route::post('/elaqe', [
    'as' => 'mail',
    'uses' => 'client\ContactController@mail'
]);

Route::get('/tenderler','client\TenderlerController@tenders');
Route::get('/tenderler/{id}/{slug}','client\TenderlerController@tenderSlug');


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
