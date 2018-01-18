@extends('layouts.master')

@section('header')
    <h2>Bem vindo ao Fincol!</h2>
    <a href="{{ url('/') }}">Inicio </a>
    <a href="{{ url('projeto/pesquisar') }}">Pesquisar </a>
    <a href="{{ url('usuario/login') }}">Login </a>
    <a href="{{ url('usuario/cadastrar') }}">Cadastrar </a>
@stop

@section('content')
    @if(isset($proj))
        Descrição:
        <div>
            $proj->decricao
        </div>
        Custo:
        <div>
            $proj->custo
        </div>
        Duração:
        <div>
            $proj->duracao meses
        </div>
        <div>
            <a href="{{ url('projeto/apoiar/'.$proj->id) }}"
               class="btn btn-primary pull-right">Apoiar</a>
        </div>
    @else
        Nada encontrado :/
    @endif
@stop