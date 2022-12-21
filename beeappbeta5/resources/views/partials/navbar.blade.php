<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/menuhome.css') }}" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <nav class="navbar  sticky-top navbar-expand-md navbar-dark" style="background-color: #ffffff; height: 4em;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img style="width: 3em " class="logobee" src="images/A.PNG" alt="">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="inicio">
                        <a class="texto1" href="/" id="about">Inicio</a>
                    </li>
                    <li class="tienda">
                        <a class="texto1" href="/.#productos" id="about">tienda</a>
                    </li>
                    
                    <li class="contactos">
                        <a class="texto1" href="/.#footer" id="about">Contactenos</a>
                    </li>

                    @if (Auth::user())
                        <li class="perfil">
                            <a class="texto1" href="/perfil" id="portafolio">Perfil</a>
                        </li>
                        <li class="carrito">
                            <a id="navbarDropdown" class="menu" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="badge badge-pill badge-dark">
                                    <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity() }}
                                </span>
                                <br>
                                <p class="textocarrito">carrito</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby=""
                                style="width: 450px; padding: 0px; border-color: #fc7e09 ">
                                <ul class="list-group" style="margin: 20px;">
                                    @include('partials.cart-drop')
                                </ul>

                            </div>
                        </li>

                        <li class="cerrar">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="texto1">Cerrar sesion</button>
                            </form>
                        </li>
                    @else
                        <li class="registro">
                            <a class="texto1" href="{{ route('register') }}" id="testimonio">Registro</a>
                        </li>
                        <li class="iniciar">
                            <a class="texto1" href="{{ route('login') }}" id="contacto">Iniciar
                                sesion
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>
