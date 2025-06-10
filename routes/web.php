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

Route::get('/','UserController@home')->name('home');
Route::get('/detailPembaca/{komik}','UserController@detailPembaca')->name('detailPembaca');
Route::get('/gambar{chapter}','UserController@gambar')->name('baca');
Route::get('/login','AdminController@login')->name('login');
Route::post('/postLogin','AdminController@postLogin')->name('postLogin');
Route::get('/homeAdmin','AdminController@homeAdmin')->name('homeAdmin');
Route::get('/tambahKomik','AdminController@tambahKomik')->name('tambahKomik');
Route::post('/postTambahKomik','AdminController@postTambahKomik')->name('postTambahKomik');
Route::get('/editKomik{komik}','AdminController@editKomik')->name('editKomik');
Route::post('/postEditKomik{komik}','AdminController@postEditKomik')->name('postEditKomik');
Route::get('/hapusKomik{komik}','AdminController@hapusKomik')->name('hapusKomik');