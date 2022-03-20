@extends('layouts.template')
@section('title', 'Cadastro de produto')
@section('content')

    <h1>Página de cadastro</h1>

    <form action="  " method="post">
        @csrf
        <label for="">Nome do produto:</label>
        <input type="text" name="nome">
        <br>
        <label for="">Descrição do produto:</label>
        <input type="text" name="descricao">
        <br>
        <label for="">Valor do produto:</label>
        <input type="text" name="valor">
        <br>
        <input type="submit" value="Cadastrar produto">
    </form>

@endsection
