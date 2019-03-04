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

Route::get('/', 'HomeController@home')->name('home');
Route::get('classify', 'NovelsController@classify')->name('classify');
Route::get('detail', 'NovelsController@detail')->name('detail');
Route::get('show', 'NovelsController@show')->name('show');
