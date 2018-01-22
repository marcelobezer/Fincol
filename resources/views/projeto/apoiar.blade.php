@extends('layouts.master')

@section('content')
    <form action="{{ action('ProjetoController@apoio') }}" method="post">
        <div class="field is-horizontal">
            <div class="field-label"><label class="label">Valor:</label></div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" type="number" name="valor" required max="9999999999" min="0.1" step="0.1">
                    </p>
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Apoiar</button>
                </div>
            </div>
        </div>
    </form>

@stop