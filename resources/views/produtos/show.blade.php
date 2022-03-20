@extends('layouts.template')
@section('title', 'Mostrar produto')
@section('content')

<div class="jumbotron">
    <h2 class="display-4">Produto:</h2>
    <h1 class="display-5">{{ $produto -> nome }}</h1>
    <hr class="my-4">
    <h2 class="display-6">Descrição:</h2>
    <p class="lead">{{ $produto -> descricao }}</p>
    <hr class="my-4">
    <h2 class="display-6">Valor:</h2>
    <p>R$ {{ $produto -> valor }}</p>
    <hr class="my-4">
    <h2 class="display-6">Estoque:</h2>
    <p>{{ $produto -> estoque }}</p>
    <a class="btn btn-primary btn-lg" href="{{route('produtos')}}" role="button">Ver Produtos</a>
  </div>

  @endsection
