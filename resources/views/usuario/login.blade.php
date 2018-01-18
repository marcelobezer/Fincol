@extends('layouts.master')

@section('content')
    <form action="{{ action('UsuarioController@verificar') }}" method="post">
        Login:  <input type = "text"      name  = "login"    required><br>
        Senha:  <input type = "password"  name  = "senha"    required><br>
                <input type = "submit"    value = "Entrar">
    </form>
@stop