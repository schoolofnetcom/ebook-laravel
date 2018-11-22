@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Produtos</h1>

        <a href="{{ route('produtos.create') }}" class="btn btn-default">Novo produto</a>
        <br />
        <br />
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th class="text-right">Ação</th>
            </tr>
            </thead>
            <tbody>

            @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->descricao }}</td>
                <td class="text-right">
                    <a href="{{ route('produtos.edit',['id'=>$produto->id]) }}" class="btn-sm btn-success">Editar</a>
                    <a href="{{ route('produtos.destroy',['id'=>$produto->id]) }}" class="btn-sm btn-danger">Remover</a>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection