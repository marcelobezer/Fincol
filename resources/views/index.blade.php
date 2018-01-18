@extends('layouts.master')

@section('header')
    <h2>Bem vindo ao Fincol!</h2>
    <a href="{{ url('/') }}">Inicio </a>
    <a href="{{ url('projeto/pesquisar') }}">Pesquisar </a>
    <a href="{{ url('usuario/login') }}">Login </a>
    <a href="{{ url('usuario/cadastrar') }}">Cadastrar </a>
@stop

@section('content')
    Projetos recentes:
    @if (isset($proj))
        <br> <br> Ainda não há projetos.
    @else
    @foreach($proj as $p)
        <div>
            <a href="{{ url('projeto/'.$p->id) }}">
                <strong>{{ $p->descricao }}</strong>
            </a>
        </div>
    @endforeach
    @endif
@stop