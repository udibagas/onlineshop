<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
* 
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('product/manage', 'ProductController@manage');
Route::get('product/list', 'ProductController@getList');
Route::get('product/list1', 'ProductController@list1');
Route::get('store/list', 'StoreController@getList');

Route::resource('faq', 'FaqController');
Route::resource('page', 'PageController');
Route::resource('post', 'PostController');
Route::resource('product', 'ProductController');
Route::resource('review', 'ReviewController');
Route::resource('discussion', 'DiscussionController');
Route::resource('store', 'StoreController');
Route::resource('user', 'UserController');
Route::resource('lokasi', 'LokasiController');
Route::resource('note', 'NoteController');
Route::resource('etalase', 'EtalaseController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');


// Route::controllers([
//    'password' => 'Auth\PasswordController',
// ]);
