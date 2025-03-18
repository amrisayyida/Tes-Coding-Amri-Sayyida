<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\WaliController;

// Login Sistem
Route::get('/', [AuthController::class, 'index']);
Route::post('/', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Home Page Guru & Admin
Route::get('/home', [HomeController::class, 'index']);

// Data User / pegawai
Route::resource('user', UserController::class);

// Data Siswa
Route::resource('siswa', SiswaController::class);

// Data Wali
Route::resource('wali', WaliController::class);

// Kelas
Route::get('/kelas' , [KelasController::class, 'index']);
Route::post('/kelas' , [KelasController::class, 'storeTipeKelas']);
Route::delete('/kelas/{id}' , [KelasController::class, 'destroyTipeKelas']);

Route::post('/kelas' , [KelasController::class, 'storeKelas']);
Route::delete('/kelas/{id}' , [KelasController::class, 'destroyKelas']);

Route::post('/kelas' , [KelasController::class, 'storeSiswaKelas']);
Route::delete('/kelas/{id}' , [KelasController::class, 'destroySiswaKelas']);



