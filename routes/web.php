<?php

use App\Http\Controllers\SystemController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SystemController::class, 'index'])->name('pesanan.index');
Route::get('/add', [SystemController::class, 'addlist'])->name('pesanan.add');
Route::post('/add', [SystemController::class, 'store'])->name('pesanan.store');
Route::get('/add/{id}/edit', [SystemController::class, 'edit'])->name('pesanan.edit');
Route::put('/add/{id}/update', [SystemController::class, 'update'])->name('pesanan.update');
Route::delete('/add/{id}/delete', [SystemController::class, 'destroy'])->name('pesanan.delete');
