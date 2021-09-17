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

// Route::get('/', function () {
//     //return view('welcome');
//     echo "deep";
// });

//Route::view( '/' ,'welcome');
Route::get('/' ,'MyController@index');
Route::post('/' ,'MyController@validate')->name('demo');
//Route::get('/test' ,'MyController@index');
