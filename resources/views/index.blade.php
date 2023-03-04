@extends ('layouts.app', ["current" => "home"])

@section('body')
    <div class="jumbotron bg-light border-secondary">
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Cadastro de Produtos</h5>
                  <p class="card-text">Cadastre aqui seus produtos</p>
                  <a href="/produtos" class="btn btn-primary">Cadastrar Produtos</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Cadastro de Categorias</h5>
                  <p class="card-text">Cadastre aqui as categorias</p>
                  <a href="/categorias" class="btn btn-success">Cadastrar Categorias</a>
                </div>
              </div>
            </div>
          </div>
    </div>

@endsection
