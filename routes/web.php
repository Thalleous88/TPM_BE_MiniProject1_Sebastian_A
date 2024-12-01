<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'tampil'])->name('mahasiswa.tampil');
Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tambah'])->name('mahasiswa.tambah');
Route::post('/mahasiswa/submit', [MahasiswaController::class, 'submit'])->name('mahasiswa.submit');
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::post('/mahasiswa/delete/{id}', [MahasiswaController::class, 'delete'])->name('mahasiswa.delete');