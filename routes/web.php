<?php

use App\Http\Controllers\CamionController;
use App\Http\Controllers\MarcaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('camiones', CamionController::class);

Route::get('/marcas', [MarcaController::class, 'index'])->name('marca.index');
Route::get('/marcas/create', [MarcaController::class, 'create'])->name('marca.create');
Route::get('/marcas/{id}/edit', [MarcaController::class, 'edit'])->name('marca.edit');


