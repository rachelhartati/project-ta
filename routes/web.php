<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// halaman utama → arahkan ke role
Route::get('/', function () {
    return view('login');
});


// proses login
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

// halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// halaman lainnya
Route::get('/pemesanan', function () {
    return view('pemesanan');
});

Route::get('/setoran', function () {
    return view('setoran');
});
Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/kelola-pesanan', function () {
    return view('kelola-pesanan');
})->name('kelola-pesanan');

Route::get('/kelola-agenanggota', function () {
    return view('kelola-agenanggota');
}) ->name('kelola-agenanggota');

Route::get('/kelola-setoran', function () {
    return view('kelola-setoran');
}) ->name('kelola-setoran');

Route::get('/user', function () {
    return view('user');
}) ->name('user');

Route::get('/role', function () {
    return view('role');
}) ->name('role');
