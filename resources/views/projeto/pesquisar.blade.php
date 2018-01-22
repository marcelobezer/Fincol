@extends('layouts.master')

@section('content')
    <form action="{{ action('ProjetoController@pesquisa') }}" method="post">
        <div class="field is-horizontal">
            <div class="field-label"><label class="label">Palavra-chave:</label></div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" type="text" name="palavra" required>
                    </p>
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Pesquisar</button>
                </div>
            </div>
        </div>
    </form>

    @if(isset($p))
        @foreach($p as $myp)
            <table class="table is-bordered is-striped is-fullwidth" style="margin-top: 20px">
                <thead>
                    <tr>
                        <th>Titulo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="{{ url('projeto/'.$myp->id) }}">{{ $myp->titulo }}</a></td>
                    </tr>
                </tbody>
            </table>
            <div>

            </div>
        @endforeach
    @endif

@stop