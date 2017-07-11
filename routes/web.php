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
Route::get('/auth/logout','AuthController@Logout');
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/','PagesController@getIndex');
Route::get('/about','PagesController@getAbout');
Route::get('/contact  ','PagesController@getContact');
Route::post('/contact  ','PagesController@postContact');
Route::get('/ram','PagesController@downloadZip');
Route::resource('/posts','PostController');
Route::resource('/upload','FileController');
Route::resource('/decrpt','EncrptController');
Route::get('/download','DfileController@getFile');
Route::get('/home','PagesController@getIndex');
