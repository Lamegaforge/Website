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

Route::get('/', 'HomeController@index')->name('stream.index');

Route::group(['namespace' => 'Guest'], function () {
	Route::prefix('video')->group(function () {
		Route::get('/', 'VideoController@index')->name('video.index');
		Route::get('{id}', 'VideoController@show')->name('video.show');;
	});
	Route::prefix('stream')->group(function () {
		Route::get('/', 'StreamController@index')->name('stream.index');
	});	
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
