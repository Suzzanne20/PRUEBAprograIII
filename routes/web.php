<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [TransporteController::class, 'index1'])->name('transporte.index');
Route::get('/create', [TransporteController::class, 'create1'])->name('transporte.create');
Route::get('/edit', [TransporteController::class, 'edit1'])->name('transporte.edit');
