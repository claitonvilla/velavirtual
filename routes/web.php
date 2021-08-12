<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OracoesController;

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

Route::get('/', [OracoesController::class, 'index'])->name('oracoes.index');
Route::get('/cadastro', [OracoesController::class, 'create'])->name('oracoes.cadastro');
Route::post('/cadastro', [OracoesController::class, 'store'])->name('oracoes.cadastro.salvar');
Route::get('/pedido/{id}', [OracoesController::class, 'show'])->name('oracoes.cadastro.dados');
Route::get('/pedido/{id}/editar', [OracoesController::class, 'edit'])->name('oracoes.editar');
Route::post('/pedido/{id}/atualizar', [OracoesController::class, 'update'])->name('oracoes.update');
Route::get('/pedido/{id}/deletar', [OracoesController::class, 'destroy'])->name('oracoes.deletar');
