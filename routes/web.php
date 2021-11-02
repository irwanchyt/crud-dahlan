<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'BarangController@index')->name('barang');
Route::post('/store','BarangController@store')->name('barang.store');
Route::get('/edit/{id}','BarangController@edit')->name('barang.edit');
Route::post('/update/{id}','BarangController@update')->name('barang.update');
Route::get('/delete/{id}','BarangController@delete')->name('barang.delete');


