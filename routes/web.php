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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout');
Route::post('/postlogin','AuthController@postlogin');

Route::get('pendaftaran','pendaftaranController@index');
Route::get('pendaftaran/create','pendaftaranController@create');
Route::post('pendaftaran/create','pendaftaranController@store');

Route::get('pembayaran','pembayaranController@index');

Route::get('pembayaran/pembayaran','pembayaranController@create');
Route::post('pembayaran/pembayaran','pembayaranController@store');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard', 'dashboardController@index');


    Route::get('dasboards/viewdaftar','pendaftaranController@store');
});

    //Route::post('/create','pendaftaranController@store');
    //Route::get('ppdb','Ppdb_controller@index');
    //Route::post('ppdb','Ppdb_controller@store');


