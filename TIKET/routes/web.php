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

Route::get('/beli', 'baseController@beli');

Route::get('/isi-data','baseController@isi_data');

Route::get('/payment','baseController@payment');

Route::get('/confirm-payment','baseController@confirm_payment');

Route::get('/registrasi-voucher', 'baseController@registrasi_voucher');

Route::get('/download-tiket', 'baseController@download_tiket');

Route::get('/tracking', 'baseController@tracking');

Route::get('/registrasi-voucher', ['uses' => 'baseController@activate']);