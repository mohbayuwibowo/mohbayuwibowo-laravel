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


Route::get('/kontak', function () {
    return view('frontend.kontak');
});

Route::get('/gambar', function () {
    return view('frontend.gambar');
});


Route::get('/apple', function () {
    return view('admin.apple');
});

Route::get('/samsung', function () {
    return view('admin.samsung');
});

Route::get('/smartphone','ControllerVivo@index')->middleware('auth');
Route::get('/apple','ControllerApple@index');
Route::delete('/smartphone/{vivo}','ControllerVivo@destroy');
Route::get('/tambah_vivo','ControllerVivo@create')->middleware('auth');
Route::post('/prosestambahvivo','ControllerVivo@store')->middleware('auth');
Route::get('/lihat_vivo/{vivo}','ControlerVivo@show')->middleware('auth');
Route::get('/edit_vivo/{vivo}','ControllerVivo@edit')->middleware('auth');
Route::patch('/proseseditvivo/{vivo}','ControllerVivo@update')->middleware('auth');
Route::get('/cari_vivo','ControllerVivo@carivivo')->middleware('auth');

Route::get('/','Controllervivo@fvivo');
Route::get('/cari fvivo','Controllervivo@carifvivo')

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
