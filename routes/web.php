<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PasienController::class, 'index'])->name('pasien.index');



Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');

Route::get('/tambah', [PasienController::class, 'create'])->name('pasien.create');

Route::post('/tambah', [PasienController::class, 'store'])->name('pasien.store');

Route::get('/edit/{pasien}', [PasienController::class, 'edit'])->name('pasien.edit');

Route::post('/edit/{id}', [PasienController::class, 'update'])->name('pasien.update');

Route::delete('/pasien/{pasien}', [PasienController::class, 'delete'])->name('pasien.delete');
