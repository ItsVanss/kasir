<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SatuanController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.app');
});

Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori/store', [KategoriController::class, 'store']);
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);
Route::get('/kategori/{id}/show', [KategoriController::class, 'show']);
Route::put('/kategori/{id}', [KategoriController::class, 'update']);
Route::get('/kategori/{id}', [KategoriController::class, 'destroy']);

Route::get('/satuan', [SatuanController::class, 'index']);
Route::post('/satuan/store', [SatuanController::class, 'store']);
Route::get('/satuan/{id}/edit', [SatuanController::class, 'edit']);
Route::get('/satuan/{id}/show', [SatuanController::class, 'show']);
Route::put('/satuan/{id}', [SatuanController::class, 'update']);
Route::get('/satuan/{id}', [SatuanController::class, 'destroy']);

Route::get('/barang', [BarangController::class, 'index']);
Route::post('/barang/store', [BarangController::class, 'store']);
Route::get('/barang/{id}/edit', [BarangController::class, 'edit']);
Route::get('/barang/{id}/show', [BarangController::class, 'show']);
Route::put('/barang/{id}', [BarangController::class, 'update']);
Route::get('/barang/{id}', [BarangController::class, 'destroy']);