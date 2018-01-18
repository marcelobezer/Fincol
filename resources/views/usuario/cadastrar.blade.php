@extends('layouts.master')

@section('header')
    <h2>Cadastrar usuário</h2>
@stop

@section('content')
    <form action="{{ action('UsuarioController@salvar') }}" method="post">
        Nome:   <input type="text" name="nome"><br>
        Login:  <input type="text" name="login"><br>
        Senha:  <input type="password" name="senha"><br>
        <input type="submit" value="Savar">
    </form>
@stop