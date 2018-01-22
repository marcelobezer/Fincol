<?php

namespace Fincol\Http\Controllers;

session_start();

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Fincol\Projeto;

class ProjetoController extends Controller {

    public function show ($id) {
        $proj = Projeto::find($id);
        $apoi = DB::select('select * from apoios where id_projeto = :id', ['id' => $proj->id]);
        $tota = 0;

        foreach ($apoi as $a) {
            $tota += $a->valor;
        }

        $myt = array();
        $myt['projeto'] = $proj;
        $myt['total'] = $tota;

        return view('projeto.projeto')->with('myt', $myt);
    }

    public function cadastrar () {
        if (array_key_exists('logado', $_SESSION) && $_SESSION['logado'] == true)
            return view('projeto.cadastrar');
        else
            return redirect('usuario/login');
    }

    public function cadastro () {
        $proj             =   new Projeto;
        $proj->titulo     =   Input::get('titulo');
        $proj->descricao  =   Input::get('descricao');
        $proj->custo      =   Input::get('custo');
        $proj->duracao    =   Input::get('duracao');
        $proj->save();

        return redirect('/');

    }

    public function pesquisar () {
        return view('projeto.pesquisar');
    }

    public function pesquisa () {
        $palavrachave   =   Input::get('palavra');
        $results        =   DB::select('select * from projetos');
        $l              =   array();

        foreach ($results as $r) {
            if (stristr($r->titulo, $palavrachave) || stristr($r->descricao, $palavrachave)) {
                array_push($l, $r);
            }
        }

        return view('projeto.pesquisar')->with('p', $l);
    }

    public function apoiar ($id) {
        if (array_key_exists('logado', $_SESSION) && $_SESSION['logado'] == true)
            return view('projeto.apoiar');
        else
            return redirect('usuario/login');
    }

    public function apoio ($id) {
        return view('projeto.apoiar')->with('id', $id);
    }

}
