<?php

use App\Http\Controllers\AuthenticationAPIController;
use App\Http\Controllers\MahasiswaAPIController;
use App\Http\Middleware\IsAdminAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/mahasiswa/tampil', [MahasiswaAPIController::class, 'getProducts']);
Route::post('/mahasiswa/tambah', [MahasiswaAPIController::class, 'createProduct'])->middleware('auth:sanctum', IsAdminAPI::class);
Route::post('/mahasiswa/edit/{id}', [MahasiswaAPIController::class, 'updateProduct']);
Route::post('/mahasiswa/delete/{id}', [MahasiswaAPIController::class, 'deleteProduct']);

Route::post('/register', [AuthenticationAPIController::class, 'register']);
Route::post('/login', [AuthenticationAPIController::class, 'login']);
Route::post('/logout', [AuthenticationAPIController::class, 'logout'])->middleware('auth:sanctum');