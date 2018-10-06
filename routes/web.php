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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/agent/{visitId}', 'AdminController@agent')->name('agent');

Route::get('/referer/{visitId}', 'AdminController@referer')->name('referer');

Route::get('/cookie/{visitId}', 'AdminController@cookie')->name('cookie');

Route::get('/logs/{visitId}', 'AdminController@logs')->name('logs');
