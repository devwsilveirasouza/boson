<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\produto;
use Illuminate\Http\Request;


class ProdutosController extends Controller
{
    public function index()
    {
        // Listar todos os produtos
        // $produtos = produto::all();
        // Paginação de produtos
        $produtos = produto::paginate();
        //var_dump($produtos);
        //dd($produtos);
        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        // Insere as informações no banco de dados
        Produto::create($request->all());

        return back()->with('mensagem', 'Produto Cadastrado com Sucesso!');
    }

    public function show($id)
    {
        $produto = Produto::find($id);
        return view('produtos.show', ['produto' => $produto]);

    }

    /*
    public function show(Produto $produto)
    {
        return view('produtos.show')
        ->with(['produto' => $produto]);
    }
    */

}
