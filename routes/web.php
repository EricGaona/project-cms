<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ExcursionesController;
use App\Http\Controllers\GaleriasController;
use App\Http\Controllers\MensajeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::view('/', 'welcome');

Route::get('/inicio', [InicioController::class, 'index']);
Route::post('/inicio', [InicioController::class, 'logo']);
Route::post('/inicio', [InicioController::class, 'datosGenerales']);

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

Route::get('/categorias', [CategoriasController::class, 'index']);
Route::post('/categorias', [CategoriasController::class, 'store']);
Route::put('/categorias/{id}', [CategoriasController::class, 'update']);
Route::delete('/ctg/{id}', [CategoriasController::class, 'destroy']);

Route::get('/excursiones', [ExcursionesController::class, 'index']);
Route::get('/crear-excursion', [ExcursionesController::class, 'create']);
Route::post('/crear-excursion', [ExcursionesController::class, 'store']);
Route::get('/excursion/{excursiones}/edit', [ExcursionesController::class, 'edit']);
Route::put('/excursion/{excursiones}', [ExcursionesController::class, 'update'])->name('actualizar-excursion');
Route::delete('/eliminar-excursion/{excursiones}', [ExcursionesController::class, 'destroy'])->name('eliminar-excursion');

Route::get('galeria/{id}', [GaleriasController::class, 'create']);
Route::post('galeria/{id}', [GaleriasController::class, 'store']);
Route::delete('eliminar-img/{id}', [GaleriasController::class, 'destroy']);

Route::get('/mensajes', [MensajeController::class, 'index']);
Route::get('/leer-mensaje/{id}', [MensajeController::class, 'show']);

//  Front End
Route::get('/', [FrontEndController::class, 'inicio']);
Route::view('/datos', 'modulos.datos');
Route::get('/', [FrontEndController::class, 'inicio']);
Route::get('excursiones-todas', [FrontEndController::class, 'excursiones']);
Route::get('excursion/{id}', [FrontEndController::class, 'excursion']);
Route::get('excursiones/{id}', [FrontEndController::class, 'excursionesPorCategoria']);
Route::post('/', [FrontEndController::class, 'mensajes']);