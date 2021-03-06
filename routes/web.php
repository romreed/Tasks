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


Route::get('/mail', 'MailController@simpleMail');
Route::get('/session/get', 'SessionController@get');
Route::get('/session/put', 'SessionController@put');
Route::get('/session/dell', 'SessionController@dell');

Route::get('/ajax', 'AjaxController@ajax');

Route::post('/ajaxAns','AjaxController@ajaxAns');
//    function (\Illuminate\Http\Request $request){
//
//    return response()->json(['message'=> $request['body']]);
//})->name('ajax');




