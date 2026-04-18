<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController; // Tambahan dari Breeze
use Illuminate\Support\Facades\Route;

// Halaman awal Breeze (Dashboard bawaan)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// BUNGKUS SEMUA ROUTE BARANG KAMU DI SINI
Route::middleware('auth')->group(function () {
    Route::get('/', [BarangController::class, 'index']);
    Route::get('/tambah', [BarangController::class, 'create']);
    Route::post('/simpan', [BarangController::class, 'store']);
    Route::get('/edit/{id}', [BarangController::class, 'edit']);
    Route::post('/update/{id}', [BarangController::class, 'update']);
    Route::get('/hapus/{id}', [BarangController::class, 'destroy']);
    
    // Route profile bawaan Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    // Route CRUD Barang kamu
    Route::get('/', [BarangController::class, 'index']);
    Route::get('/tambah', [BarangController::class, 'create']);
    Route::post('/simpan', [BarangController::class, 'store']);
    Route::get('/edit/{id}', [BarangController::class, 'edit']);
    Route::post('/update/{id}', [BarangController::class, 'update']);
    Route::get('/hapus/{id}', [BarangController::class, 'destroy']);

    // PASTIKAN ROUTE PROFIL LENGKAP SEPERTI INI:
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/tambah', [BarangController::class, 'create']);

    
    Route::post('/store', [BarangController::class, 'store']);
});

require __DIR__.'/auth.php';
