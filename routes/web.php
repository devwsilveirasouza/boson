<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;

// Rotas do projeto

// Rota raiz do projeto
Route::get('/', HomeController::class);
// Nomeando as rotas //
// Rota para cadastro de cliente
Route::get('produtos/inserir', [ProdutosController::class, 'create'])->name('produtos.inserir');
// Rota da listagem de produtos
Route::get('produtos/{produto}', [ProdutosController::class, 'show'])->name('produtos.descricao');
// Rota com mais de um parâmetro
//Route::get('produtos/{produto}/{valor?}', [ProdutosController::class, 'show'])->name('produtos.descricao');
// Rota da página index do projeto
Route::get('produtos', [ProdutosController::class, 'index'])->name('produtos');
// Rota para cadastrar produtos
Route::post('produtos', [ProdutosController::class, 'insert'])->name('produtos.insert');
// Rota para editar produtos
Route::get('produtos/{produto}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');
// Rota para edição dos produtos
Route::put('produtos/{produto}', [ProdutosController::class, 'editar'])->name('produtos.editar');
// Rota para excluir produto
Route::get('produtos/{produto}/delete', [ProdutosController::class, 'modal'])->name('produtos.modal');
// Rotas para exclusão do registro após confirmação pela modal
Route::delete('produtos/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete');
