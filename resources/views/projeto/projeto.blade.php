@extends('layouts.master')

@section('content')
    @if(isset($myt))
        <h2 class="title" align="center">{{ $myt['projeto']->titulo }}</h2>
        <div>
            <h4 class="title is-4">Descrição:</h4>
            <h5 class="subtitle is-6">{{ $myt['projeto']->descricao }}</h5>
        </div>
        <div>
            <h4 class="title is-4" style="margin-top: 10px">Custo:</h4>
            <h5 class="subtitle is-6">{{ $myt['projeto']->custo }}</h5>
        </div>
        <div>
            <h4 class="title is-4" style="margin-top: 10px">Duração:</h4>
            <h5 class="subtitle is-6">{{ $myt['projeto']->duracao }}</h5>
        </div>
        <div>
            <h4 class="title is-4" style="margin-top: 10px">Arrecadado até agora:</h4>
            <h5 class="subtitle is-6">{{ $myt['total'] }}</h5>
        </div>
        <hr>
        <div style="margin-top: 15px">
            <h3 class="subtitle">Apoie agora:</h3>
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
        </div>
    @else
        Nada encontrado
    @endif
@stop