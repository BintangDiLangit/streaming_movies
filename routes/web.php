<?php

use App\Http\Controllers\Admin\Auth\AuthController as AdminAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/detail/{slug}', [DashboardController::class, 'show'])->name('detail');

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::prefix('/auth')->name('auth.')->group(function () {
        Route::get('/sign-in', [AdminAuthController::class, 'signInPage'])->name('sign-in');
    });

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('index');
});
