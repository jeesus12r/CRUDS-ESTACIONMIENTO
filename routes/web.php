<?php

use App\Http\Controllers\AfiliacionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ModelosController;
use App\Http\Controllers\MultasController;
use App\Http\Controllers\ProductosController;
use App\Http\Middleware\isAuthenticated;
use Illuminate\Support\Facades\Route;



Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/logearse', [AuthController::class, 'logear'])->name('logearse');
Route::get('/registro',[AuthController::class,'registro'])->name('registro');
Route::post('/registrar',[AuthController::class,'Registrar'])->name('registrar');


Route::middleware([isAuthenticated::class])->group(function () {
    
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
//Routs de productos
    Route::get('/home', [ProductosController::class, 'index'])->name('home');
    Route::get('/createproductos',[ProductosController::class,'create'])->name('createproductos');
    Route::post('/store',[ProductosController::class,'store'])->name('store');
    Route::get('/show/{id}',[ProductosController::class,'show'])->name('show');
    Route::get('/edit/{id}',[ProductosController::class,'edit'])->name('edit');
Route::put('/update/{id}',[ProductosController::class,'update'])->name('update');
Route::delete('/destroy/{id}',[ProductosController::class,'destroy'])->name('eliminar');

//Routs de clientes
Route::get('/indexClientes', [ClientesController::class, 'index'])->name('indexClientes');
Route::get('/createClientes',[ClientesController::class,'create'])->name('createClientes');
Route::post('/storeClientes',[ClientesController::class,'store'])->name('storeClientes');
Route::get('/showClientes/{id}',[ClientesController::class,'show'])->name('showClientes');
Route::get('/editClientes/{id}',[ClientesController::class,'edit'])->name('editClientes');
Route::put('/updateClientes/{id}',[ClientesController::class,'update'])->name('updateClientes');
Route::delete('/eliminarClientes/{id}',[ClientesController::class,'destroy'])->name('eliminarClientes');

//Routs de afiliaciones
Route::get('/indexAfiliacion', [AfiliacionController::class, 'index'])->name('indexAfiliacion');
Route::get('/createAfiliacion',[AfiliacionController::class,'create'])->name('createAfiliacion');
Route::post('/storeAfiliacion',[AfiliacionController::class,'store'])->name('storeAfiliacion');
Route::get('/showAfiliacion/{id}',[AfiliacionController::class,'show'])->name('showAfiliacion');
Route::get('/editAfiliacion/{id}',[AfiliacionController::class,'edit'])->name('editAfiliacion');
Route::put('/updateAfiliacion/{id}',[AfiliacionController::class,'update'])->name('updateAfiliacion');
Route::delete('/eliminarAfiliacion/{id}',[AfiliacionController::class,'destroy'])->name('eliminarAfiliacion');

//routs de modelos
Route::get('/indexModelos', [ModelosController::class, 'index'])->name('indexModelos');
Route::get('/createModelos',[ModelosController::class,'create'])->name('createModelos');
Route::post('/storeModelos',[ModelosController::class,'store'])->name('storeModelos');
Route::get('/showModelos/{id}',[ModelosController::class,'show'])->name('showModelos');
Route::get('/editModelos/{id}',[ModelosController::class,'edit'])->name('editModelos');
Route::put('/updateModelos/{id}',[ModelosController::class,'update'])->name('updateModelos');
Route::delete('/eliminarModelos/{id}',[ModelosController::class,'destroy'])->name('eliminarModelos');

//routs de multas
Route::get('/indexMultas', [MultasController::class, 'index'])->name('indexMultas');
Route::get('/createMultas',[MultasController::class,'create'])->name('createMultas');
Route::post('/storeMultas',[MultasController::class,'store'])->name('storeMultas');
Route::get('/showMultas/{id}',[MultasController::class,'show'])->name('showMultas');
Route::get('/editMultas/{id}',[MultasController::class,'edit'])->name('editMultas');
Route::put('/updateMultas/{id}',[MultasController::class,'update'])->name('updateMultas');
Route::delete('/eliminarMultas/{id}',[MultasController::class,'destroy'])->name('eliminarMultas');
}); 