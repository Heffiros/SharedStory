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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');


Route::group(['prefix' => 'users'], function () {
    Route::get('/show', ['uses' => 'UserController@show']);
    Route::post('/update', ['uses' => 'UserController@update']);
});

Route::group(['prefix' => 'category'], function(){
    Route::get('/', ['uses' => 'CategoryController@index']);
    Route::get('/create', ['uses' => 'CategoryController@create']);
    Route::post('/store', ['uses' => 'CategoryController@store']);
    Route::post('/update', ['uses' => 'CategoryController@update']);
    Route::get('/destroy/{category}', ['uses' => 'CategoryController@destroy']);
    Route::get('/show/{category}', ['uses' => 'CategoryController@show']);
});