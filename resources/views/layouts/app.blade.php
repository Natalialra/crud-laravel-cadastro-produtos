<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    {{-- <link rel="stylesheet" href="../../css/app.css"> --}}
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
<<<<<<< HEAD
            @hasSection('body') // Verifica se a seção body existe no arquivo que está chamando o app.blade.php
                @yield('body') // Se existir, então imprime o conteúdo da seção body
=======
            @hasSection('body')  {{-- Verifica se a seção body existe no arquivo que está chamando o app.blade.php --}}
                @yield('body') {{-- Se existir, então imprime o conteúdo da seção body --}}
>>>>>>> 37723129ca36138cd81b49c5e04cfdf2ebade301
            @endif
        </main>
    </div>
    {{-- <script src="../../js/app.js" type="text/javascript"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script></body>
    @hasSection('javascript')
        @yield('javascript')
    @endif
    </html>
