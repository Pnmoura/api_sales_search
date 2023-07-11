<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('/api')->group(function () {

//Busca por todos os usuarios
    Route::get('/clientes', [ClienteController::class, 'index']);

//Salvar os dados enviados
    Route::post('/clientes', [ClienteController::class, 'store']);

//Consulta por ID
    Route::get('/clientes/{id}', [ClienteController::class, 'show']);

//Atualiza informações do usuário por ID
    Route::put('/clientes/{id}', [ClienteController::class, 'update']);

//Exclui usuário pelo ID
    Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);

});
