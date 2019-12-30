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

Route::get('/', 'homepageController@index');
Route::get('/hydraulic-dump-truck', 'homepageController@shop1');
Route::get('/diesel', 'homepageController@shop2');
