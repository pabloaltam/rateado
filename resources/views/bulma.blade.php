<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ranked.cl</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body class="has-background-light">
<nav class="navbar container is-light" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <div class="navbar-item has-text-weight-bold is-size-5" href="">
            <a href="{{url('/')}}">Ranked</a>
        </div>
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
           data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-end">
            <div class="navbar-item">
                <a href="{{url('/categories')}}" class="navbar-item">
                    Categorías
                </a>

                <a class="navbar-item">
                    Buscador
                </a>
                <div class="buttons">
                    <a class="button is-primary is-small">
                        Registrarse
                    </a>
                    <a class="button is-info is-small">
                        Iniciar sesión
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
@yield('seccion')
<footer class="container footer has-background-dark has-text-light">
    <div class="has-text-centered">
        <p>
            <strong class="has-text-light">Ranked</strong> trademarks todos los derechos reservados.<br>Chile 2019.
        </p>
    </div>
</footer>
</body>
</html>
