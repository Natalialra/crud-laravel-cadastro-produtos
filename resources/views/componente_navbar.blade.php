<nav class="navbar navbar-expand-lg bg-info my-3 rounded">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link @if($current=="home") active" @endif aria-current="page" href="/">Home</a>
              </li>
          <li class="nav-item">
            <a class="nav-link @if($current=="produtos") active" @endif aria-current="page" href="/produtos">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if($current=="categorias") active" @endif aria-current="page" href="/categorias">Categorias</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
