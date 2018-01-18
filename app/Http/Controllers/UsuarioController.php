<?php

namespace Fincol\Http\Controllers;

use Illuminate\Http\Request;
use Fincol\Projeto;

class UsuarioController extends Controller {

    public function index () {
        $proj = Projeto::all();
        return view('index')->with('proj', $proj);
    }

    public function cadastrar () {
        return view('usuario.cadastrar');
    }

    public function login () {
        return view('usuario.login');
    }


}
