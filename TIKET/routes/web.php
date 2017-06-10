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
    return view('pages.menu');
});

Route::get('/menu', function () {
    return View::make('pages.menu');
});

Route::get('/tes', function () {
    return view('pages.tes');
});

Route::get('/tes2', function () {
    return View::make('pages.tes');
});

Route::get('/nama', function () {
    return View::make('pages.nama');
});

Route::get('/aktivasi-voucher', function () {
    return View::make('pages.aktivasi-voucher');
});

Route::get('/beli', function () {
    return View::make('pages.beli');
});

Route::get('/isi-data', function () {
    return View::make('pages.isi-data');
});

Route::get('/payment', function () {
    return View::make('pages.payment');
});

Route::get('/confirm-payment', function () {
    return View::make('pages.confirm-payment');
});

Route::get('/registrasi-voucher', function () {
    return View::make('pages.voucher-registration');
});

Route::get('/download-tiket', function () {
    return View::make('pages.download-tiket');
});

Route::get('/tracking', function () {
    return View::make('pages.tracking');
});
