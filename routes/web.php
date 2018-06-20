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

Route::get('/',['as'=>'index','uses'=>'ChannelController@show']);
Route::get('/show/{alias}',['as'=>'show','uses'=>'ChannelController@show']);
Route::get('/show',['as'=>'show2','uses'=>'ChannelController@show2']);

Route::get('/create',['as'=>'getCreate','uses'=>'ChannelController@create']);
Route::post('/create',['as'=>'postCreate','uses'=>'ChannelController@create']);

Route::get('/update/{alias}',['as'=>'getUpdate','uses'=>'ChannelController@getUpdate']);
Route::post('/update',['as'=>'postUpdate','uses'=>'ChannelController@postUpdate']);

Route::get('/store',['as'=>'getStore','uses'=>'ChannelController@store']);
Route::post('/store',['as'=>'postStore','uses'=>'ChannelController@store']);
// Route::get('/watch/{alias}',['as'=>'watch','uses'=>'Controller@getWatch']);

Route::any('{all?}',function(){
  return view('error');
});