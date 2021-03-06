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

use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout');
// Route::post('/postlogin','AuthController@postlogin');
Route::post('/postlogin', [AuthController::class, 'postlogin']);

Route::get('pendaftaran','pendaftaranController@index');
Route::get('pendaftaran/create','pendaftaranController@create');
Route::post('pendaftaran/create','pendaftaranController@store');
Route::get('pendaftaran/export','pendaftaranController@export');

Route::get('verifikasi/pendaftaran','verifikasiController@index');

//Route::get('dashboards/view', 'pendaftaranController@store');


Route::get('pembayaran','pembayaranController@index');

Route::get('pembayaran/pembayaran','pembayaranController@create');
Route::post('pembayaran/pembayaran','pembayaranController@store');
Route::get('pembayaran/view', 'pembayaranController@store');
Route::get('pembayaran','pembayaranController@index');
Route::get('pembayaran/{id}/verifikasi','pembayaranController@verifikasi');

Route::get('pendaftaran/index','pendaftaranController@store');
Route::get('pendaftaran','pendaftaranController@index');
Route::get('pendaftaran/{id}/detail','pendaftaranController@detail');
Route::get('pendaftaran/{id}/verifikasi','pendaftaranController@verifikasi');

Route::get('register/register','registerController@create');
Route::post('register/register','registerController@store');
Route::get('register/view', 'registerController@index');


Route::get('dasboards/viewdaftar','pendaftaranController@store');

Route::group(['middleware' => 'auth'],function(){

});

    //Route::post('/create','pendaftaranController@store');
    //Route::get('ppdb','Ppdb_controller@index');
    //Route::post('ppdb','Ppdb_controller@store');


