@extends('layouts.master')

@section('content')
    <h2 align="center" class="title">Bem vindo ao Fincol!</h2>
    <h3 class="subtitle">Projetos recentes:</h3>
    @if (sizeof($proj) == 0)
        <h4 align="center" class="subtitle">Ainda não há projetos.</h4>
    @else
    @foreach($proj as $p)
        <table class="table is-bordered is-striped is-fullwidth">
            <thead>
                <tr>
                    <th>Projeto</th>
                    <th>Custo</th>
                    <th>Duração</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="{{ url('projeto/'.$p->id) }}"> {{ $p->titulo }}</a></td>
                    <td><a href="{{ url('projeto/'.$p->id) }}"> {{ $p->custo }}</a></td>
                    <td><a href="{{ url('projeto/'.$p->id) }}"> {{ $p->duracao }}</a></td>
                </tr>
            </tbody>
        </table>
    @endforeach
    @endif
@stop