<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\FrontEndController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::view('/', 'welcome');

Route::get('/inicio', [InicioController::class, 'index']);

//  Front End
Route::get('/', [FrontEndController::class, 'inicio']);
