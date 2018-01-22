@extends('layouts.master')

@section('content')
    <h2 class="title">Novo Projeto</h2>
    <form action="{{ action('ProjetoController@cadastro') }}" method="post">
        <div class="field is-horizontal">
            <div class="field-label"><label class="label">Titulo:</label></div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded">
                        <input type="text" name="titulo" required class="input" maxlength="50">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label"><label class="label">Descrição:</label></div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded">
                        <textarea class="textarea" name="descricao" required maxlength="4999"></textarea>
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label"><label class="label">Custo:</label></div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded">
                        <input type="number" name="custo" required class="input" max="9999999999" min="0.1" step="0.1">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label"><label class="label">Duração(meses):</label></div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded">
                        <input type="number" name="duracao" required class="input" max="2500" min="1" step="1">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link">Salvar</button>
            </div>
        </div>
    </form>
@stop