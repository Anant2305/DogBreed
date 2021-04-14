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

Route::get('/breed', 'BreedsController@index');
Route::get('/breed/random', 'BreedsController@showRandom');
Route::get('/breed/{id}', 'BreedsController@show');
Route::get('/breed/{id}/image', 'BreedsController@showImage');
