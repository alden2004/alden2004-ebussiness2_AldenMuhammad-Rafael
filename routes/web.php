<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ===============================
// Dashboard default (Jetstream)
// ===============================
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ===============================
// Profile
// ===============================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ===============================
// USER DASHBOARD
// ===============================
Route::get('/user/dashboard', [UserDashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('user.dashboard');

// ===============================
// ADMIN DASHBOARD
// ===============================
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('admin.dashboard');

// ===============================
// ADMIN AREA (CRUD + Pages)
// ===============================
Route::middleware(['auth'])->prefix('admin')->group(function () {

    // CRUD Produk
    Route::resource('/products', ProductController::class);

    // Halaman Pesanan (static dulu)
    Route::get('/orders', function () {
        return view('dashboard.admin.orders');
    })->name('admin.orders');

    // Halaman User (static dulu)
    Route::get('/users', function () {
        return view('dashboard.admin.users');
    })->name('admin.users');
});

// Logout
Route::post('/logout', function () {
    auth()->logout();
    return redirect('/');
})->name('logout');

require __DIR__.'/auth.php';
