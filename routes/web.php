<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JurusanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'verified', 'admin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // jurusan
        Route::prefix('jurusan')
            ->name('jurusan.')
            ->group(function () {
                Route::get('/', [JurusanController::class, 'index'])->name('index');
                Route::post('/', [JurusanController::class, 'store'])->name('store');
                Route::get('/{id}', [JurusanController::class, 'edit'])->name('edit');
                Route::put('/{id}', [JurusanController::class, 'update'])->name('update');
                Route::delete('/{id}', [JurusanController::class, 'destroy'])->name('destroy');
            });
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
