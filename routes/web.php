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

Route::get('/', function () {
    return redirect()->route('Dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('Login');

Route::get('/profile', function () {
    return view('auth.profile');
})->name('Profile');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('Dashboard');

Route::get('/kinerja-tahunan', function () {
    return view('main-pages.kinerja-tahunan');
})->name('Kinerja Tahunan');

Route::get('/kinerja-pegawai', function () {
    return view('main-pages.kinerja-pegawai');
})->name('Kinerja Pegawai');



Route::get('/aktivitas-harian', function () {
    return view('main-pages.aktivitas-harian');
})->name('Aktivitas Harian');

Route::get('/aktivitas-harian/catatan-harian', function () {
    return view('main-pages.catatan-harian');
})->name('Catatan Harian');

Route::get('/aktivitas-harian/result', function () {
    return view('main-pages.aktivitas-harian-result');
})->name('Aktivitas Harian Result');