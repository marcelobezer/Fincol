@extends('layouts.master')

@section('content')
    <form action="{{ action('ProjetoController@apoio') }}" method="post">
        Valor:  <input type = "text"      name  = "valor"      required><br>
                <input type = "submit"    value = "Go">
    </form>

@stop