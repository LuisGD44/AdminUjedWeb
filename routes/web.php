<?php

use App\Http\Controllers\cadenasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\verMaterialController;
use App\Http\Controllers\verSolicitudController;
use App\Http\Controllers\verCanastaController;
use App\Http\Controllers\verDescuentosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});



//Rutas 
Route::get('/verSolicitud',[verSolicitudController::class,'index'])->name('solicitud');

Route::get('/verMaterial',[verMaterialController::class,'index'])->name('material');

Route::get('/verCanasta',[verCanastaController::class,'index'])->name('canasta');

Route::get('/verCadenas',[cadenasController::class,'index'])->name('cadenas');

Route::get('/verDescuentos',[verDescuentosController::class,'index'])->name('descuentos');