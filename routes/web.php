<?php

Route::get('/', 'UsuarioController@index');

Route::view('/about', 'about');

Route::get('usuario/cadastrar', 'UsuarioController@cadastrar');

Route::post('usuario/cadastrar', 'UsuarioController@salvar');

Route::get('usuario/login', 'UsuarioController@login');

Route::post('usuario/login', 'UsuarioController@verificar');

Route::get('projeto/{id}', 'ProjetoController@show')->where('id', '[0-9]+');

Route::get('projeto/cadastrar', 'ProjetoController@cadastrar');

Route::post('projeto/cadastrar', 'ProjetoController@cadastro');

Route::get('projeto/pesquisar', 'ProjetoController@pesquisar');

Route::post('projeto/pesquisar', 'ProjetoController@pesquisa');

Route::get('projeto/apoiar/{id}', 'ProjetoController@apoiar')->where('id', '[0-9]+');

Route::post('projeto/apoiar', 'ProjetoController@apoio');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
