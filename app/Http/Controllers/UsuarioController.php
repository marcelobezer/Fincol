<?php

namespace Fincol\Http\Controllers;

session_start();

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Fincol\Projeto;
use Fincol\Usuario;

class UsuarioController extends Controller {

    public function index () {
        $proj = Projeto::all();
        return view('index')->with('proj', $proj);
    }

    public function cadastrar () {
        return view('usuario.cadastrar');
    }

    public function salvar () {
        $user           =  new Usuario;
        $user->nome     =  Input::get('nome');
        $user->login    =  Input::get('login');
        $user->senha    =  hash('sha256', Input::get('senha'));
        $user->save();

        return redirect('/');
    }

    public function login () {
        if (array_key_exists('logado', $_SESSION) && $_SESSION['logado'] == true) {
            $_SESSION['logado'] = false;
            return redirect('/');
        }
        else {
            return view('usuario.login');
        }
    }

    public function verificar () {
        $login      =   Input::get('login');
        $senha      =   hash('sha256', Input::get('senha'));
        $results    =   DB::select('select * from usuarios 
                            where nome = :nome', ['nome' => $login]);

        if (sizeof($results) == 1) {
            if ($results[0]->senha == $senha) {
                $_SESSION['logado'] = true;
                $_SESSION['id']     = $results[0]->id;

                return redirect('/');
            }
        }
        return redirect('usuario/login');
    }

}
