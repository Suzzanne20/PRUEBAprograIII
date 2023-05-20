<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransporteController;
use App\Http\Controllers\TipoMercaController;
use App\Http\Controllers\MercanciaController;

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
