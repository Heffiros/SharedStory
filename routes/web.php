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

Route::group(['prefix' => 'story'], function(){
    Route::get('/', ['uses' => 'StoryController@index']);
    #de Route::get('/create', ['uses' => 'StoryController@create']);
});

Route::group(['prefix' => 'simple_story'], function(){
    Route::get('/', ['uses' => 'SimpleStoryController@index']);
    Route::post('/store', ['uses' => 'SimpleStoryController@store']);
    Route::post('/create', ['uses' => 'SimpleStoryController@create']);
    Route::get('/show/{id}', ['uses' => 'SimpleStoryController@show']);
});

Route::group(['prefix' => 'pages'], function(){
    Route::get('/', ['uses' => 'SimpleStoryPageController@index']);
    Route::post('/create', ['uses' => 'SimpleStoryPageController@create']);
    Route::get('/validation', ['uses' => 'SimpleStoryPageController@validation']);
    Route::get('/list/{id}', ['uses' => 'SimpleStoryPageController@liste']);
});