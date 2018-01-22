@extends('layouts.master')

@section('content')
    <h2 align="center" class="title">Novo Usuário</h2>
    <form action="{{ action('UsuarioController@salvar') }}" method="post">
        <div class="field is-horizontal">
            <div class="field-label"><label class="label">Nome:</label></div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded">
                        <input type="text" name="nome" required class="input" maxlength="50">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label"><label class="label">Login:</label></div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" name="login" required maxlength="16">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label"><label class="label">Senha:</label></div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded">
                        <input type="password" name="senha" required class="input">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link">Cadastrar</button>
            </div>
        </div>
    </form>
@stop