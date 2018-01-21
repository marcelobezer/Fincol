@extends('layouts.master')

@section('content')
    @if(isset($proj))
        <strong> {{ $proj->titulo }} </strong> <br>
        Descrição:
        <div>
            {{ $proj->descricao }}
        </div> <br>
        Custo:
        <div>
            {{ $proj->custo }}
        </div> <br>
        Duração:
        <div>
            {{ $proj->duracao }} (meses)
        </div> <br>
        <div>
            <a href="{{ url('projeto/apoiar/'.$proj->id) }}"
               class="btn btn-primary pull-right">Apoiar</a>
        </div>
    @else
        Nada encontrado
    @endif
@stop