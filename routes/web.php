<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    $countArsip = \App\Models\Arsip::count();
    $countKategori = \App\Models\Kategori::count();
    return view('dashboard', compact('countArsip', 'countKategori'));
})->name('dashboard');

// Download Arsip (letakkan sebelum resource)
Route::get('arsip/{arsip}/download', [ArsipController::class, 'download'])->name('arsip.download');

// CRUD Arsip & Kategori
Route::resource('arsip', ArsipController::class);
Route::resource('kategori', KategoriController::class);

// Halaman Tentang
Route::view('/tentang', 'tentang')->name('tentang');
