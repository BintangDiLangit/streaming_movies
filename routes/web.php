<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\Film\FilmController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/detail/{slug}', [DashboardController::class, 'show'])->name('detail');
Route::post('/short-url', [DashboardController::class, 'makeShortUrl'])->name('short-url');
Route::get('/az/{code}', [DashboardController::class, 'shortUrlIndex'])->name('short-url.index');

Route::prefix('/auth')->name('auth.')->group(function () {
    Route::get('/sign-in', [AuthController::class, 'signInPage'])->name('sign-in.index');
    Route::post('/sign-in', [AuthController::class, 'signIn'])->name('sign-in.store');
    Route::get('/sign-up', [AuthController::class, 'signUpPage'])->name('sign-up.index');
    Route::post('/sign-up', [AuthController::class, 'signUp'])->name('sign-up.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/auth/sign-out', [AuthController::class, 'signOut'])->name('auth.sign-out');
});

/** User */
Route::prefix('/admin')->name('admin.')->middleware(['auth', 'roles:admin'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('index');

    Route::prefix('/user')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::put('/', [UserController::class, 'update'])->name('update');
        Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
    });
});

/** Film */
Route::prefix('/admin')->name('admin.')->middleware(['auth', 'roles:admin'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('index');

    Route::prefix('/film')->name('film.')->group(function () {
        Route::get('/', [FilmController::class, 'index'])->name('index');
        Route::post('/', [FilmController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [FilmController::class, 'edit'])->name('edit');
        Route::put('/{id}', [FilmController::class, 'update'])->name('update');
        Route::delete('/{id}', [FilmController::class, 'destroy'])->name('destroy');
    });
});
