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

Route::get('/home', 'PegawaiController@homepegawai');
Route::put('/home', 'PegawaiController@updateedit');
Route::get('/pegawai/delete/{nik}', 'PegawaiController@delete')->name('pegawai_delete');
