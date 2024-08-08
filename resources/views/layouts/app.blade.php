<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link rel="stylesheet" href="../../css/app.css"> --}}
    <style>
        body {
            padding: 20px;
        }
    </style>
    <title>Cadastro de Produtos</title>
</head>
<body>
    <div class="container">
        @component('componente_navbar', ["current" => $current])
        @endcomponent
        <main role="main">
            @hasSection('body') // Verifica se a seção body existe no arquivo que está chamando o app.blade.php
                @yield('body') // Se existir, então imprime o conteúdo da seção body
            @endif
        </main>
    </div>
    {{-- <script src="../../js/app.js" type="text/javascript"></script> --}}
</body>
</html>
