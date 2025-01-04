<?php

use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/jurusan', [JurusanController::class, 'index']);
Route::post('/jurusan', [JurusanController::class, 'store']);
Route::get('/jurusan/{jurusan}', [JurusanController::class, 'show']);
Route::put('/jurusan/{jurusan}', [JurusanController::class, 'update']);
Route::delete('/jurusan/{jurusan}', [JurusanController::class, 'destroy']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show']);
Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy']);

Route::get('/test', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'Test success!',
    ], 200);
});