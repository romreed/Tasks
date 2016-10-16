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


//Route::get('login', function () {
//    return view('login');
//});
//Route::get('register', function () {
//    return view('register');
//});
//
//
//
//// Маршруты аутентификации...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');
//
//// Маршруты регистрации...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/task/create', ['as' => 'task.create', 'uses' => 'HomeController@create']);
Route::post('/task', ['as' => 'task.store', 'uses' => 'HomeController@store']);
Route::get('/task/{task}', ['as' => 'task.show', 'uses' => 'HomeController@show'])->where(['task'=>'[0-9]+']);
Route::get('/task/{task}/edit', ['as' => 'task.edit', 'uses' => 'HomeController@edit'])->where(['task'=>'[0-9]+']);
Route::post('/task/{task}', ['as' => 'task.update', 'uses' => 'HomeController@update'])->where(['task'=>'[0-9]+']);
Route::get('/task/{task}/destroy', ['as' => 'task.destroy', 'uses' => 'HomeController@destroy'])->where(['task'=>'[0-9]+']);
Route::get('/showList',['as'=> 'showList','uses' => 'HomeController@showList']);

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::get('/upload', ['as'=> 'upload','uses' =>'UploadFileController@index']);
Route::post('/upload',['as'=> 'upload','uses' => 'UploadFileController@upload']);

