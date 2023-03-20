@extends('layouts.app', ["current" => "produtos"] )

@section('body')

    <div class="card">
        <h5 class="card-header">Adicionar Novo Produto</h5>
        <div class="card-body">
            <form action="{{ route('produtos.store') }}" method="POST">
                @method('POST')
                @csrf
                <div class="form-group ">
                    <div class="row ">
                        <div class="col-5">
                            <label for="nomeProduto" class="ms-2"></label>
                            <input type="text" name="nomeProduto" class="form-control mt-3" id="nomeProduto" value="{{$produtos->nome}}">
                        </div>
                        <div class="col-2">
                            <label for="precoProduto" class="ms-2">Preço</label>
                            <input type="number" name="precoProduto" class="form-control mt-3" id="precoProduto" value="{{$produtos->preco}}">
                        </div>
                        <div class="col-5">
                            <label for="categoriaProduto" class="ms-2">Categoria</label>

                            <select name="categoria_id" class="form-select mt-3" id="categoria_id">
                                <option selected>Selecione a Categoria</option>
                                @foreach ($cats as $cat)
                                    <option value="{{ $cat->id }}" {{ $produtos->categoria_id == $cat->id ? 'selected' : '' }} >{{ $cat->nome }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Salvar</button>
                <button type="cancel" class="btn btn-danger mt-4">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
