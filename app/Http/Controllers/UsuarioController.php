<?php

namespace Fincol\Http\Controllers;

use Illuminate\Http\Request;
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
        $user = new Usuario;
        $user->nome = Input::get('nome');
        $user->login = Input::get('login');
        $user->senha = Input::get('senha');
        dump($user);
        $user->save();

        return redirect('index');
    }

    public function login () {
        return view('usuario.login');
    }


}
