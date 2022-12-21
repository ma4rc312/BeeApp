<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/menuhome.css') }}" rel="stylesheet">
    <script src="{{ asset('bootstrap.bundle.js') }}"></script>

    <title>Document</title>
</head>

<body>

    <nav class="navbar  sticky-top navbar-expand-md navbar-dark" style="background-color: #222831;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="images/d.svg" alt="">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="fondo2">
                        <a class="menu" href="#" id="about">Inicio</a><br>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="opcion">
                        <ul class="nav">
                            <li class="option"><a href="" id="about">salvemos la especie</a>
                                <ul>
                                    <li><a href="/concientizacion" id="about">Concientizacion</a>
                                    <li> <a href="">consejos y tips</a>
                                    <li>
                                    <li> <a href="">lineas de emergencia</a>
                                    <li>
                                </ul>
                            </li>

                        </ul>
                    </div>


                    <li class="fondo2">
                        <a class="menu" href="#productos" id="about">tienda</a>
                    </li>

                    <li class="fondo">
                        <a class="menu" href="#somos" id="about">Quienes somos</a>

                    </li>

                    <li class="fondo">
                        <a class="menu" href="#footer" id="about">Contactenos</a>

                    </li>



                    @if (Auth::user())
                        <li class="">
                            <a class="" href="{{ route('clientes.create') }}" id="portafolio">Quiero ser
                                Apicultor</a>

                        </li>
                        <li class="fondo">
                            <a class="menu" href="{{ route('productos.create') }}" id="portafolio">Mi perfil</a>
                        </li>

                        <li class="fondo">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="menu2">Cerrar sesion</button>
                            </form>
                        </li>
                    @else
                        <li class="fondo">
                            <a class="menu" href="{{ route('register') }}" id="testimonio">Registro</a>
                        </li>
                        <li class="fondo">
                            <a class="menu" href="{{ route('login') }}" id="contacto">Iniciar
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
