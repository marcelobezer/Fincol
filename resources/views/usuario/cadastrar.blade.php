@extends('layouts.master')

@section('content')
    <form action="{{ action('UsuarioController@salvar') }}" method="post">
        Nome:   <input type = "text"      name  = "nome"     required><br>
        Login:  <input type = "text"      name  = "login"    required><br>
        Senha:  <input type = "password"  name  = "senha"    required><br>
                <input type = "submit"    value = "Savar">
    </form>
@stop