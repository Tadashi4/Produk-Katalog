<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;

// Halaman Beranda / Home
Route::get('/', [KatalogController::class, 'home'])->name('home');

// Halaman Katalog Produk & Pencarian
Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');

// Halaman Detail Produk
Route::get('/katalog/{id}', [KatalogController::class, 'show'])->name('katalog.show');

// Halaman Admin: Daftar Produk (Lihat)
Route::get('/admin/produk', [KatalogController::class, 'adminIndex'])->name('admin.produk');

// Halaman Admin: Form Tambah Produk
Route::get('/admin/produk/tambah', [KatalogController::class, 'create'])->name('admin.create');

// Aksi Admin: Simpan Produk Baru
Route::post('/admin/produk', [KatalogController::class, 'store'])->name('admin.store');

// Halaman Admin: Form Ubah/Edit Produk
Route::get('/admin/produk/{id}/edit', [KatalogController::class, 'edit'])->name('admin.edit');

// Aksi Admin: Update Produk
Route::put('/admin/produk/{id}', [KatalogController::class, 'update'])->name('admin.update');

// Aksi Admin: Hapus Produk
Route::delete('/admin/produk/{id}', [KatalogController::class, 'destroy'])->name('admin.destroy');