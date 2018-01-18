@extends('layouts.master')

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