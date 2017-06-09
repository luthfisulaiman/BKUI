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
