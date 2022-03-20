@extends('layouts.template')
@section('title', 'Editar produto')
@section('content')

    <h1>Editar produtos</h1>

    <div class="container mt-4">
        <form method="post" action="{{ route('produtos.editar', $produto ) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" value="{{$produto->nome}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor">Valor do produto</label>
                        <input type="text" class="form-control" name="valor" value="{{$produto->valor}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="estoque">Estoque</label>
                        <input type="text" class="form-control" name="estoque" value="{{$produto->estoque}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" rows="3" name="descricao" value="{{$produto->descricao}}"></textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="mt-4 mb-4 btn btn-primary">Enviar</button>
        </form>
    </div>

@endsection
