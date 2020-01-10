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
Route::get('/ajax-product/{itemId}', 'homepageController@quickview');
Route::get('/dapatkan-penawaran/{itemId}', 'homepageController@penawaran');
Route::post('/kirim-penawaran', 'homepageController@kirimpenawaran');

// DASHBOARD
Route::get('/tools', 'homepageController@tools')->name('signin');
// NEED AUTH
Route::get('/dashboard', 'dashboardController@index');
Route::get('/utility-item', 'dashboardController@utility');
Route::post('/tambah-data-kategori', 'dashboardController@kategoriadd');
Route::post('/tambah-data-item', 'dashboardController@itemadd');
// VIEW EDIT FORM
Route::get('/update-kategori/{id}', 'dashboardController@updatekategori');
Route::get('/delete-kategori/{id}', 'dashboardController@deletekategori');
Route::get('/update-item/{id}', 'dashboardController@updateitem');
Route::get('/delete-item/{id}', 'dashboardController@deleteitem');
// PROSES EDIT FORM
Route::post('/proses-kategori/{id}', 'dashboardController@prosesupdatekategori');
Route::post('/proses-item/{itemId}', 'dashboardController@prosesupdateitem');
