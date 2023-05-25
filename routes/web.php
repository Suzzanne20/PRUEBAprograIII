<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransporteController;
use App\Http\Controllers\CamionController;
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

Route::get('/ ', function () { return view('home'); });

Route::get('/transporte', [TransporteController::class, 'index1'])->name('transporte.index');
Route::get('/create',[TransporteController::class,'create1'])->name('transporte.create');
Route::post('/store',[TransporteController::class,'store1'])->name('transporte.store');
Route::get('/edit/{id}',[TransporteController::class,'edit1'])->name('transporte.edit');
Route::put('/update/{id}',[TransporteController::class,'update1'])->name('transporte.update');
Route::get('/show/{id}',[TransporteController::class,'show1'])->name('transporte.show');
Route::delete('/destroy/{id}', [TransporteController::class,'destroy1'])->name('transporte.destroy');

Route::get('/camion',[CamionController::class,'index2'])->name('camion.index');
Route::get('/create2',[CamionController::class,'create2'])->name('camion.create');
Route::post('/store2',[CamionController::class,'store2'])->name('camion.store');
Route::get('/edit2/{id}',[CamionController::class,'edit2'])->name('camion.edit');
Route::put('/update2/{id}',[CamionController::class,'update2'])->name('camion.update');
Route::get('/show2/{id}',[CamionController::class,'show2'])->name('camion.show');
Route::delete('/destroy2/{id}', [CamionController::class,'destroy2'])->name('camion.destroy');
