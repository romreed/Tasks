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
use app\Http\Controllers\HomeController;

Route::get('/', 'HomeController@index');
Route::get('/index', 'HomeController@indexNew');

Route::get('/task/{id}/edit', 'HomeController@edit')->where(['id'=>'[0-9]+']);

Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});



// Маршруты аутентификации...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Маршруты регистрации...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');