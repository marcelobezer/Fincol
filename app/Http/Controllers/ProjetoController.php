<?php

namespace Fincol\Http\Controllers;

use Illuminate\Http\Request;
use Fincol\Projeto;

class ProjetoController extends Controller {

    public function show ($id) {
        $proj = Fincol\Projeto::find($id);
        return view('projeto.projeto')->with('proj', $proj);
    }

    public function cadastrar () {
        return view('projeto.cadastrar');
        $proj = new Projeto;
        $proj->descricao = Input::get('descricao');
        $proj->custo = Input::get('custo');
        $proj->duracao = Input::get('duracao');
        $proj->save();
    }

    public function pesquisar () {
        return view('projeto.pesquisar');
    }

    public function apoiar ($id) {
        return view('projeto.apoiar')->with('id', $id);
    }

}
