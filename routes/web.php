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

Route::get('/', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Guest'], function () {
	Route::prefix('video')->group(function () {
		Route::get('/', 'VideoController@index')->name('video.index');
		Route::get('{id}', 'VideoController@show')->name('video.show');;
	});
	Route::prefix('stream')->group(function () {
		Route::get('/', 'StreamController@index')->name('stream.index');
	});	
});

Route::group(['namespace' => 'Auth', 'middleware' => ['auth', 'my'], 'prefix' => 'auth'], function () {
	Route::prefix('user')->group(function () {
		Route::get('{user_id}/edit', 'UserController@edit')->name('auth.user.edit');
		Route::post('update-informations/{user_id}', 'UserController@update')->name('auth.user.update');
		Route::post('update-password/{user_id}', 'UserController@updatePassword')->name('auth.user.update_password');
		Route::post('update-avatar/{user_id}', 'UserController@updateAvatar')->name('auth.user.update_avatar');
		Route::post('update-banner/{user_id}', 'UserController@updateBanner')->name('auth.user.update_banner');
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index');
