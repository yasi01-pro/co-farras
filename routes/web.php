<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KunjunganController;
use Illuminate\Support\Facades\Route;

// Jadikan Home sebagai halaman utama
Route::get('/', [HomeController::class, 'index']);

// (opsional) kalau masih mau akses /home juga
Route::get('/home', [HomeController::class, 'index']);

Route::get('/kunjungan', [KunjunganController::class, 'index'])->name('kunjungan.form');
Route::post('/kunjungan', [KunjunganController::class, 'store'])->name('kunjungan.store');
