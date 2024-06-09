<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\AlatController;

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
    return view('welcome');
});

Route::get('/latihan', [LatihanController::class, 'index'])->name('latihan.index');
Route::get('/latihan/create', [LatihanController::class, 'create'])->name('latihan.create');
Route::post('/latihan/store', [LatihanController::class, 'store'])->name('latihan.store');
Route::get('/latihan/edit/{latihan}', [LatihanController::class, 'edit'])->name('latihan.edit');
Route::put('/latihan/update/{latihan}', [LatihanController::class, 'update'])->name('latihan.update');
Route::delete('/latihan/destroy/{latihan}', [LatihanController::class, 'destroy'])->name('latihan.destroy');

Route::get('/alat', [alatController::class, 'index'])->name('alat.index');
Route::get('/alat/create', [alatController::class, 'create'])->name('alat.create');
Route::post('/alat/store', [alatController::class, 'store'])->name('Alat.store');
Route::get('/alat/edit/{alat}', [alatController::class, 'edit'])->name('alat.edit');
Route::put('/alat/update/{alat}', [alatController::class, 'update'])->name('alat.update');
Route::delete('/alat/destroy/{alat}', [alatController::class, 'destroy'])->name('alat.destroy');
Route::get('cetak-pdf', [AlatController::class, 'cetak'])->name('alat.cetak');