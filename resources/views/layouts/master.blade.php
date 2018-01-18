<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Fincol</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
    <div class="container">
        <div class="page-header">
            <h2>Bem vindo ao Fincol!</h2>
            <a href="{{ url('/') }}">Inicio </a>
            <a href="{{ url('projeto/pesquisar') }}">Pesquisar </a>
            @if(session()->has('logado') && session()->get('logado'))
                <a href="{{ url('usuario/login') }}">Logout </a>
            @else
                <a href="{{ url('usuario/login') }}">Login </a>
            @endif
            <a href="{{ url('usuario/cadastrar') }}">Cadastrar </a>
            @yield('header')
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @yield('content')
    </div>
    </body>
</html>
