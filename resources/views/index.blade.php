@extends('layouts.master')

@section('content')
    Projetos recentes:
    @if (sizeof($proj) == 0)
        <br> <br> Ainda não há projetos.
    @else
    @foreach($proj as $p)
        <div>
            <a href="{{ url('projeto/'.$p->id) }}">
                <strong>{{ $p->titulo }}</strong>
            </a>
        </div>
    @endforeach
    @endif
@stop