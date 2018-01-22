<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Fincol</title>
        <script defer src="//use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css" crossorigin="anonymous" />
    </head>
    <body>
    <header class="container">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                Fincol
            </div>
            <div class="navbar-menu">
                <a class="navbar-item" href="{{ url('/') }}">Inicio </a>
                <a class="navbar-item" href="{{ url('projeto/pesquisar') }}">Pesquisar </a>
                <a class="navbar-item" href="{{ url('projeto/cadastrar')  }}">Projeto </a>
                @php
                    $v = "Login";
                    if(array_has($_SESSION, 'logado'))
                        if($_SESSION['logado'])
                            $v = "Logout";
                    echo "<a class=\"navbar-item\" href=\"" . url('usuario/login') . "\"> $v </a>";
                    if($v == "Login")
                    echo "<a class=\"navbar-item\" href=\"" . url('usuario/cadastrar') . "\">Cadastrar </a>";
                @endphp
            </div>
        </nav>

    </header>
    <div class="container">
        <div>
            @yield('content')
        </div>
    </div>

    </body>
</html>
