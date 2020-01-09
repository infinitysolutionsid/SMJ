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
// PREVIEW
Route::get('/', 'homepageController@index');
Route::get('/hydraulic-dump-truck', 'homepageController@shop1');
Route::get('/sparepart-truck', 'homepageController@shop2');
Route::get('/ajax-product', 'homepageController@quickview');

// DASHBOARD
Route::get('/tools', 'homepageController@tools')->name('signin');
// NEED AUTH
Route::get('/dashboard', 'dashboardController@index');
Route::get('/utility-item', 'dashboardController@utility');
Route::post('/tambah-data-kategori', 'dashboardController@kategoriadd');
