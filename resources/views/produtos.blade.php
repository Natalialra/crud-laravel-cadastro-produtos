@extends('layouts.app', ["current" => "produtos"] )

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Produtos</h5>
            @if(count($produtos) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Preço</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                                <td>
                                    <a href="/produtos/editar/{{ $produto->id }}" class="btn btn-sm btn-primary">Editar</a>
                                    <a href="/produtos/apagar/{{ $produto->id }}" class="btn btn-sm btn-danger">Apagar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="card-footer">
            <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
        </div>
    </div>
@endsection
