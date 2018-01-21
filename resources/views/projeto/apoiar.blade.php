@extends('layouts.master')

@section('content')
    <form action="{{ action('ProjetoController@apoio') }}" method="post">
        Palavra-chave:  <input type = "text"      name  = "palavra"      required><br>
        <input type = "submit"    value = "Pesquisar">
    </form>

    @if(isset($p))
        @foreach($p as $myp)
            <div>
                <a href="{{ url('projeto/'.$myp->id) }}">
                    <strong> {{ $myp->titulo }} </strong>
                </a>
            </div>
        @endforeach
    @endif

@stop