<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('mario_layout.home');
});

Route::get('/mario', function () {
    return view('mario_layout.home');
});

Route::get('/mario/home', function () {
    return view('mario_layout.home');
});

Route::get('mario_akun', 'App\Http\Controllers\MarioAkunController@index');
Route::get('mario_akun/tambah', 'App\Http\Controllers\MarioAkunController@tambah');
Route::post('mario_akun/tambah_proses', 'App\Http\Controllers\MarioAkunController@tambah_proses');
Route::get('mario_akun/edit/{id}', 'App\Http\Controllers\MarioAkunController@edit');
Route::post('mario_akun/edit_proses', 'App\Http\Controllers\MarioAkunController@edit_proses');
Route::get('mario_akun/delete/{id}', 'App\Http\Controllers\MarioAkunController@delete');

Route::get('mario_user', 'App\Http\Controllers\MarioUserController@index');
Route::get('mario_user/tambah', 'App\Http\Controllers\MarioUserController@tambah');
Route::post('mario_user/tambah_proses', 'App\Http\Controllers\MarioUserController@tambah_proses');
Route::get('mario_user/edit/{id}', 'App\Http\Controllers\MarioUserController@edit');
Route::post('mario_user/edit_proses', 'App\Http\Controllers\MarioUserController@edit_proses');
Route::get('mario_user/delete/{id}', 'App\Http\Controllers\MarioUserController@delete');

Route::get('mario_induk_user', 'App\Http\Controllers\MarioIndukUserController@index');
Route::get('mario_induk_user/tambah', 'App\Http\Controllers\MarioIndukUserController@tambah');
Route::post('mario_induk_user/tambah_proses', 'App\Http\Controllers\MarioIndukUserController@tambah_proses');
Route::get('mario_induk_user/edit/{id}', 'App\Http\Controllers\MarioIndukUserController@edit');
Route::post('mario_induk_user/edit_proses', 'App\Http\Controllers\MarioIndukUserController@edit_proses');
Route::get('mario_induk_user/delete/{id}', 'App\Http\Controllers\MarioIndukUserController@delete');

Route::get('mario_jurnal', 'App\Http\Controllers\MarioJurnalController@index');
Route::get('mario_jurnal/tambah', 'App\Http\Controllers\MarioJurnalController@tambah');
Route::post('mario_jurnal/tambah_proses', 'App\Http\Controllers\MarioJurnalController@tambah_proses');
Route::get('mario_jurnal/edit/{id}', 'App\Http\Controllers\MarioJurnalController@edit');
Route::post('mario_jurnal/edit_proses', 'App\Http\Controllers\MarioJurnalController@edit_proses');
Route::get('mario_jurnal/delete/{id}', 'App\Http\Controllers\MarioJurnalController@delete');