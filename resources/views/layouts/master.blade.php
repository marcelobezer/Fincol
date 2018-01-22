<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Fincol</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
    <div class="container">
        <a class="page-header">
            <h2>Bem vindo ao Fincol!</h2>
            <a href="{{ url('/') }}">Inicio </a>
            <a href="{{ url('projeto/pesquisar') }}">Pesquisar </a>
            <a href="{{ url('projeto/cadastrar')  }}">Projeto </a>
            @if(Session::has('logado') && Session::get('logado'))
                <a href="{{ url('usuario/login') }}">Logout </a>
            @else
                <a href="{{ url('usuario/login') }}">Login </a>
            @endif
            <a href="{{ url('usuario/cadastrar') }}">Cadastrar </a>
        </a>
        <br> <br>
        <div>
            @yield('content')
        </div>
    </div>

    </body>
</html>
