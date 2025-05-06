<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AspirasiController;

// Route Beranda
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route Visi Misi
Route::get('/visi-misi', [HomeController::class, 'visimisi'])->name('visimisi');

// Struktur Organisasi
Route::resource('/struktur', StructureController::class)->only(['index','create','store']);
Route::resource('/struktur', StructureController::class);


// Program Kerja / Kegiatan
Route::resource('/kegiatan', ProgramController::class)->only(['index','create','store']);
Route::resource('/kegiatan', ProgramController::class);


// Berita
Route::resource('/berita', NewsController::class)->only(['index','create','store','show']);
Route::resource('/berita', NewsController::class);

Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('aspirasi.index');
Route::post('/aspirasi', [AspirasiController::class, 'store'])->name('aspirasi.store');
