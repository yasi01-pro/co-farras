<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Jadikan Home sebagai halaman utama
Route::get('/', [HomeController::class, 'index']);

// (opsional) kalau masih mau akses /home juga
Route::get('/home', [HomeController::class, 'index']);
