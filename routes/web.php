<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\SlideController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::view('/', 'welcome');

Route::get('/inicio', [InicioController::class, 'index']);
Route::put('/datos', [UsuariosController::class, 'update']);
Route::get('/usuarios', [UsuariosController::class, 'index']);
//Route::view('/crear-usuarios', 'modulos.crear-usuarios');
// LO DE LA LINEA DE ABAJO ES OTRA FORMA DE HACER LA LINEA DE ARRIBA
Route::get('/crear-usuarios', [UsuariosController::class, 'create']);
Route::post('/crear-usuarios', [UsuariosController::class, 'store']);
Route::delete('/usuarios/{id}', [UsuariosController::class, 'destroy']);
Route::get('/slide', [SlideController::class, 'index']);
Route::post('/slide', [SlideController::class, 'store']);
Route::delete('/slide/{id}', [SlideController::class, 'destroy']);

//  Front End
Route::get('/', [FrontEndController::class, 'inicio']);
Route::view('/datos', 'modulos.datos');
Route::get('/', [FrontEndController::class, 'inicio']);