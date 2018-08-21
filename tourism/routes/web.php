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


Route::get('aparment','CheckController@apartment');
Route::get('units','CheckController@units');
Route::get('login','UserController@loginman');
Route::post('login','UserController@loginAction');
Route::get('home',[

    'uses' => 'UserController@home',
    'as' =>'users',
    'role' => ['admin','user']

]);



