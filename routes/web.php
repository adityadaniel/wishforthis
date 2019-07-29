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

Route::get('/', 'GiftsController@index');
Route::get('/gifts/{id}', 'GiftsController@show');
Route::post('/gifts/', 'GiftsController@store');
Route::get('/thank-you', 'GiftsController@thanks');