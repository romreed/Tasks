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

Route::get('/', ['as'=> 'indexOld','uses' => 'HomeController@index' ]);
Route::get('/index',['as'=> 'index','uses' => 'HomeController@indexNew']);
Route::get('/task/{id}/edit',['as'=> 'edit','uses' => 'HomeController@edit'])->where(['id'=>'[0-9]+']);



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

Route::get('/task/create', ['as' => 'task.create', 'uses' => 'HomeController@create']);
Route::post('/task', ['as' => 'task.store', 'uses' => 'HomeController@store']);
Route::get('/task/{task}', ['as' => 'task.show', 'uses' => 'HomeController@show']);
Route::get('/task/{task}/edit', ['as' => 'task.edit', 'uses' => 'HomeController@edit']);
Route::post('/task/{task}', ['as' => 'task.update', 'uses' => 'HomeController@update']);