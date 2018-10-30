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

Route::get('/','GalleryController@index');
// show by id
Route::get('/gallery/show/{id}','GalleryController@show');

Route::get('/photo/create','PhotoController@create');
// show by id
Route::get('/photo/show/{id}','PhotoController@show');


Route::resource('gallery', 'GalleryController');
Route::resource('photo', 'PhotoController');

