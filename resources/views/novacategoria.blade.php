@extends('layouts.app', ['current' => 'categorias'])

@section('body')
    <h4 class="text-success">Criar Categoria</h4>
    <div class="card">
        <h5 class="card-header">Nome da Categoria</h5>
        <div class="card-body">
            <form action="{{ route('categorias.store') }}" method="POST">
                @method('POST')
                @csrf
                <div class="form-group mb-5">
                    <input type="text" name="nomeCategoria" class="form-control" id="nomeCategoria"
                        placeholder="Nome da Categoria">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="cancel" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
