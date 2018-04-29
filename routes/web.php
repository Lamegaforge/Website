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

Route::group(['namespace' => 'Auth', 'middleware' => ['auth'], 'prefix' => 'auth'], function () {
	Route::prefix('user')->group(function () {
		Route::get('{user_id}/edit', 'UserController@edit')->name('auth.user.edit');
		Route::post('update-informations/{user_id}', 'UserController@updateInformations')->name('auth.user.update');
		Route::post('update-password/{user_id}', 'UserController@updatePassword')->name('auth.user.update_password');
		Route::post('update-medias/{user_id}', 'UserController@updateMedias')->name('auth.user.update_medias');
		Route::get('destroy-avatar/{user_id}', 'UserController@destroyAvatar')->name('auth.user.destroy_avatar');
		Route::get('destroy-banner/{user_id}', 'UserController@destroyBanner')->name('auth.user.destroy_banner');
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index');
