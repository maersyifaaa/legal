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
    return view('welcome');
});

Route::get('/tulis', function () {
    return 'welcome';
});

Route::get('/sidebar', function() {
    return view('sidebar'); //ini surat_Masuk tp blm ku rename
});

Route::get('/surat_keluar', function() {
    return view('surat_keluar');
});

Route::get('/daftar_surat_keluar', function() {
    return view('daftar_surat_keluar');
});

Route::get('/profile', function() {
    return view('profil');
});

Route::get('/kontrak', function() {
    return view('kontrak');
});

Route::get('/home', function() {
    return view('homepage');
});

//
Route::get('/homedump', function() {
    return view('cobahomepage');
});

Route::get('/pelaporan_hukum', function() {
    return view('pelaporan_hukum');
});


Route::get('/regulasi', function() {
    return view('regulasi');
});

Route::get('/cek_status_hukum', function() {
    return view('cek_status_pelaporan_hukum');
});