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

Route::get('/trial', 'LatihanController@index');
Route::get('/latihan1','LatihanController@show1');
Route::get('/latihan2','LatihanController@show2');
Route::get('/latihan3','LatihanController@show3');
Route::get('/latihan4','LatihanController@show4');
Route::get('/latihan5','LatihanController@show5');