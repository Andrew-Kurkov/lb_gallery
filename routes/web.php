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

Route::get('/','MainController@PicView');
Route::get('/dd','MainController@dd');
Route::get('/pp/{id}','MainController@PicPages');
Route::get('/ap','MainController@addPic');

Route::post('/ap','MainController@Add')->name('add');


