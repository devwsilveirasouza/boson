<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
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
// Rota raiz do projeto
Route::get('/', HomeController::class);
// Rota para cadastro de cliente - Nomeando as rotas
Route::get('produtos/inserir', [ProdutosController::class, 'create'])->name('produtos.inserir');
// Rota da listagem de produtos
Route::get('produtos/{produto}', [ProdutosController::class, 'show'])->name('produtos.descricao');
// Rota da página index do projeto
Route::get('produtos', [ProdutosController::class, 'index'])->name('produtos');


