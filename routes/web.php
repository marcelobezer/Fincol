<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'UsuarioController@index');

Route::get('about', function () {
    return view('about');
});

Route::get('usuario/cadastrar', 'UsuarioController@cadastrar');

Route::post('usuario/cadastrar', 'UsuarioController@salvar');

Route::get('usuario/login', 'UsuarioController@login');

Route::post('usuario/login', 'UsuarioController@verificar');

Route::get('projeto/{id}', 'ProjetoController@show')->where('id', '[0-9]+');

Route::get('projeto/cadastrar', 'ProjetoController@cadastrar');

Route::get('projeto/pesquisar', 'ProjetoController@pesquisar');

Route::get('projeto/apoiar/{id}', 'ProjetoController@apoiar')->where('id', '[0-9]+');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
