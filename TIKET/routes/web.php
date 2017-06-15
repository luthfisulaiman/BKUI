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

Route::get('/','baseController@index');

Route::get('/aktivasi-voucher', 'baseController@aktivasi_voucher');
Route::post('/aktivasi-voucher', 'baseController@activate');
Route::post('/registrasi-voucher', 'baseController@registrasi_voucher');

Route::get('/beli', 'baseController@beli');
Route::post('/beli', 'baseController@beliSubmit');
Route::post('/isi-data', 'baseController@isi_data');

Route::get('/user/minda', 'baseController@admin');

Route::get('/payment','baseController@payment');

Route::get('/confirm-payment','baseController@confirm_payment');

Route::get('/download-tiket', 'baseController@download_tiket');

Route::get('/tracking', 'baseController@tracking');
Route::post('/tracking', 'baseController@tracking_telusur');
Route::get('/admin', 'baseController@admin');