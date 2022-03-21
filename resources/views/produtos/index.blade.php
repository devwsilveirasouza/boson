@extends('layouts.template')
@section('title', 'Listagem de produto')

@section('content')

    <div class="container">

        <a href="{{ route('produtos.inserir') }}" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Produto</a>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Valor</th>
                                <th>Estoque</th>
                                <th>Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($produtos as $produto)
                                <tr>
                                    <td> {{ $produto->nome }} </td>
                                    <td> {{ $produto->valor }} </td>
                                    <td> {{ $produto->estoque }} </td>
                                    <td>
                                        <a href=" {{ route('produtos.descricao', [$produto->id]) }} "><i
                                                class="fas fa-eye text-primary mr-1"></i></a>
                                        <a href=" {{ route('produtos.edit', [$produto->id]) }} "><i
                                                class="fas fa-edit text-info mr-1"></i></a>
                                        <a data-toggle="modal" data-target="#exampleModal" href=""><i
                                                class="fas fa-trash text-danger mr-1"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- {{ $produtos->links() }} -->
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').dataTable({
                "ordering": false
            })
        });
    </script>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deletar registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Deseja realmente excluir este registro?

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <form method="POST" action="{{ route('produtos.delete', $produto) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (@$id != '') {
        echo "<script>$('#exampleModal').modal('show');</script>";
    }
    ?>

@endsection
