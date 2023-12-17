<?php

use App\Http\Controllers\ControllerAPI;
use App\Http\Controllers\pelaporanHukumController;
use App\Http\Controllers\SuratKeluarController;
use App\Models\SuratKeluar;
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

//
Route::get('/homedump', function() {
    return view('cobahomepage');
});

Route::get('/tulis', function () {
    return 'welcome';
});

//route yg dipake mulai ini

//route sign in - balqis
Route::get('/sign-in', function() {
    return view('auth.sign_in');
});

//route dashboard - balqis
Route::get('/home', function() {
    return view('dashboard');
});

//route profile - charisa
Route::get('/profile', function() {
    return view('profile.profile');
});

//route edit profile - charisa

//route kontrak - zahra
Route::get('/kontrak', function() {
    return view('kontrak');
});

//route create surat masuk - zahra
Route::get('/surat-masuk', function() {
    return view('surat-masuk.surat_masuk'); 
});

//route create surat keluar - salsha
Route::get('/surat-keluar', function() {
    return view('surat-keluar.surat_keluar');
});
Route::post('/surat-keluar', [SuratKeluarController::class, 'store']);

//route status surat keluar - salsha
Route::get('/status-surat-keluar', function() {
    $surat_keluar = SuratKeluar::all();
    return view('status-surat.status_surat_keluar', compact('surat_keluar'));
});

//route create pelaporan hukum - ida
Route::get('/pelaporan-hukum', function() {
    return view('pelaporan-hukum.pelaporan_hukum');
});

//route privacy policy - ida
Route::get('/privacy-policy', function() {
    return view('Privacy-policy.privacy_policy');
});

//route status pelaporan hukum - fika
// Route::get('/status-pelaporan', function() {
//     return view('status-surat.status_pelaporan_hukum');
// });


// create pelaporan-hukum ida
Route::get('/pelaporan_hukum/hukum', [pelaporanHukumController::class, 'create'])->name('pelaporan_hukum.create');
//store pelaporan_hukum ida
Route::post('/pelaporan_hukum/hukum', [pelaporanHukumController::class, 'store'])->name('pelaporan_hukum.store');
//read pelaporan_hukum fika
Route::get('status-pelaporan/hukum', [pelaporanHukumController::class, 'index']);

//route regulasi - fika
Route::get('/regulasi', function() {
    return view('regulasi.regulasi');
});