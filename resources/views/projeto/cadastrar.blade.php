@extends('layouts.master')

@section('content')
    <form action="{{ action('ProjetoController@cadastro') }}" method="post">
        Titulo:         <input type = "text"      name  = "titulo"      required><br>
        Descrição:      <input type = "text"      name  = "descricao"   required><br>
        Custo:          <input type = "text"      name  = "custo"       required><br>
        Duração(meses): <input type = "text"      name  = "duracao"     required><br>
                        <input type = "submit"    value = "Savar">
    </form>
@stop