<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
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

// Route::get('/user', function () {
//     return view('user.user');
// }) ->name('user');

Route::get('/role', function () {
    return view('role');
}) ->name('role');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}/data', [UserController::class, 'getUser']);
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/role', [RoleController::class, 'index'])->name('role.index');
Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
Route::post('/role/store', [RoleController::class, 'store'])->name('role.store');
Route::get('/role/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
Route::put('/role/{id}', [RoleController::class, 'update'])->name('role.update');
Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('role.destroy');
Route::get('/role/{id}/permissions', [RoleController::class, 'permissions'])->name('role.permissions');
Route::post('/role/{id}/permissions', [RoleController::class, 'updatePermissions'])->name('role.permissions.update');