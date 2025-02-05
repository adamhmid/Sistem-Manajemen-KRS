<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\RegistrasiKuliahController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {
  Route::get('/home', [HomeController::class, 'index'])->name('home');

  Route::middleware(['role:admin'])->group(function () {
    Route::resource('program-studi', ProgramStudiController::class);
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('dosen', DosenController::class);
    Route::resource('mata-kuliah', MataKuliahController::class);
    Route::resource('kelas', KelasController::class);
  });

  Route::middleware(['role:admin,operator'])->group(function () {
    Route::resource('registrasi-kuliah', RegistrasiKuliahController::class);
  });
});
