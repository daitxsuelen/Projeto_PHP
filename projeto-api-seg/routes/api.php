<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/cliente',[ClienteController::class, 'listar']);
Route::post('/cliente',[ClienteController::class, 'salvar']);
Route::put('/cliente/{id}',[ClienteController::class, 'editar']);
Route::post('/cliente/{id}',[ClienteController::class, 'ecxcluir']);