@extends('layouts.template')
@section('title', 'Cadastro de produto')
@section('content')

    <h1>Cadastrar produtos</h1>

    <div class="container mt-4">
        <form method="POST" action="{{ route('produtos.insert') }}">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor">Valor do produto</label>
                        <input type="text" class="form-control" name="valor">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="estoque">Estoque</label>
                        <input type="text" class="form-control" name="estoque">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" rows="3" name="descricao"></textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="mt-4 mb-4 btn btn-primary">Enviar</button>
        </form>
    </div>

@endsection
