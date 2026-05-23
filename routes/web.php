<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AgentRequestController;
use App\Http\Controllers\AgenStokController;
// halaman utama → arahkan ke role
Route::get('/', function () {
    return view('login');
});


// proses login
Route::post('/login', [LoginController::class, 'login'])->name('login');


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


Route::get('/kelola-setoran', function () {
    return view('kelola-setoran');
}) ->name('kelola-setoran');

// Route::get('/user', function () {
//     return view('user.user');
// }) ->name('user');

Route::get('/role', function () {
    return view('role');
}) ->name('role');

Route::group(['middleware'=> 'auth'], function () {

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/request', [AgentRequestController::class, 'index'])->name('request.index');
Route::get('/request/create', [AgentRequestController::class, 'create'])->name('request.create');
Route::post('/request/store', [AgentRequestController::class, 'store'])->name('request.store');
Route::get('/request/{id}/edit', [AgentRequestController::class, 'edit'])->name('request.edit');
Route::put('/request/{id}/update', [AgentRequestController::class, 'update'])->name('request.update');
Route::delete('/request/{id}/delete', [AgentRequestController::class, 'destroy'])->name('request.delete');
Route::get('/request/{id}/detail', [AgentRequestController::class, 'show'])->name('request.detail');
Route::put('/request/{id}/approve', [AgentRequestController::class, 'approve'])->name('request.approve');
Route::put('/request/{id}/reject', [AgentRequestController::class, 'reject'])->name('request.reject');

Route::get('/agentstok',[AgenStokController::class, 'index'])->name('agentstok.index');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
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

Route::get('/agent', [AgentController::class, 'index'])->name('agent.index');
Route::get('/agen/create', [AgentController::class, 'create'])->name('agent.create');
Route::post('/agent/store', [AgentController::class, 'store'])->name('agent.store');
Route::get('/agent/{id}/edit', [AgentController::class, 'edit'])->name('agent.edit');
Route::put('/agent/{id}/update', [AgentController::class, 'update'])->name('agent.update');
Route::delete('/agent/{id}/delete', [AgentController::class, 'destroy'])->name('agent.destroy');
Route::get('/agent/{id}/detail', [AgentController::class, 'detail'])->name('agent.detail');
Route::get('/agent/{id}/create', [AgentController::class, 'createMember'])->name('agent.tambah.anggota');
Route::post('/agent/{id}/store', [AgentController::class, 'storeMember'])->name('agent.store.anggota');

Route::get('/item', [ItemController::class, 'index'])->name('item.index');
Route::get('item/create', [ItemController::class, 'create'])->name('item.create');
Route::post('/item/store', [ItemController::class, 'store'])->name('item.store');
Route::get('item/{id}/edit', [ItemController::class, 'edit'])->name('item.edit');
Route::put('item/{id}', [ItemController::class, 'update'])->name('item.update');
Route::delete('/item/{id}', [ItemController::class, 'destroy'])->name('item.destroy');

});
