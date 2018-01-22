@extends('layouts.master')

@section('content')
    @if(isset($myt))
        <strong> {{ $myt['projeto']->titulo }} </strong> <br>
        Descrição:
        <div>
            {{ $myt['projeto']->descricao }}
        </div> <br>
        Custo:
        <div>
            {{ $myt['projeto']->custo }}
        </div> <br>
        Duração:
        <div>
            {{ $myt['projeto']->duracao }} (meses)
        </div> <br>
        <br>
        Arrecadado até agora:
        <div>
            {{ $myt['total'] }}
        </div> <br>
        <div>
            <a href="{{ url('projeto/apoiar/'.$myt['projeto']->id) }}"
               class="btn btn-primary pull-right">Apoiar</a>
        </div>
    @else
        Nada encontrado
    @endif
@stop