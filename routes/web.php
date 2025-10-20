<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranBeasiswaController;
use App\Http\Controllers\JenisBeasiswaController;

// Halaman utama landing page dengan menu tabs
Route::get('/', function () {
    return view('landing');
})->name('landing');

// Jenis Beasiswa CRUD
Route::resource('jenis_beasiswa', JenisBeasiswaController::class);

// Pendaftaran Beasiswa routes
Route::get('/daftar', [PendaftaranBeasiswaController::class, 'create'])->name('beasiswa.create');
Route::post('/daftar', [PendaftaranBeasiswaController::class, 'store'])->name('beasiswa.store');
Route::get('/hasil', [PendaftaranBeasiswaController::class, 'index'])->name('beasiswa.index');
Route::get('/daftar/{id}/edit', [PendaftaranBeasiswaController::class, 'edit'])->name('beasiswa.edit');
Route::put('/daftar/{id}', [PendaftaranBeasiswaController::class, 'update'])->name('beasiswa.update');
Route::delete('/daftar/{id}', [PendaftaranBeasiswaController::class, 'destroy'])->name('beasiswa.destroy');
