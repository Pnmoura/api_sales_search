<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendaController;
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

Route::prefix('/api')->group(function () {

    //Traz todos os produtos cadastrados no banco
    Route::get('/produtos', [VendaController::class, 'index']);

    //Salva/cadastra novos produtos
    Route::post('/produtos', [VendaController::class, 'store']);

    //Consulta por ID
    Route::get('/produtos/{id}', [VendaController::class, 'show']);

    //Atualiza informações do produto por ID
    Route::put('/produtos/{id}', [VendaController::class, 'update']);

    //Deleta produto por ID
    Route::delete('/produtos/{id}', [VendaController::class, 'destroy']);
});
