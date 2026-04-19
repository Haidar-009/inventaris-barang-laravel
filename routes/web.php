<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
   // Statistik
    Route::get('/dashboard', [BarangController::class, 'dashboard'])->name('dashboard');
    
    // List Barang
    Route::get('/', [BarangController::class, 'index'])->name('barang.index');

    // List Barang (Halaman Utama)
    Route::get('/', [BarangController::class, 'index'])->name('barang.index');

    // CRUD Barang
    Route::get('/tambah', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/store', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
    Route::post('/update/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::get('/hapus/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');

    // Route Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';