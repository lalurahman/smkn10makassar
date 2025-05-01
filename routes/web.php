<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JurusanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/guru', [GuruController::class, 'index'])->name('guru');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

Route::get('/blog/detail', [BlogController::class, 'detail'])->name('blog.detail');



Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'verified', 'admin'])
    ->group(function () {
        Route::get('admin/', [DashboardController::class, 'index'])->name('dashboard');

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
