<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link rel="shortcut icon" href="http://localhost/adsi_2141297/07_sitioWeb/images/logo.png">
    
    <link href="css/stilo.css" rel="stylesheet">


    <title>BeeApp</title>
</head>

<body>

    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/logo.png" class="logo-brand" width="80" height="80" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <ion-icon name="grid-sharp"></ion-icon>
                <i class="icon-screen-smartphone"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="home">
                            <ion-icon name="home-outline"></ion-icon>
                        </a>


                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="portafolio">Portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="precio">Precio</a>
                    </li>

                    @if(Auth::user())
                    <form method="POST" action="{{ route('logout') }}"  > 
                        @csrf 
                        <button type="submit" class="btn btn-   secondary">LogOUT</button>
                    </form> 
                    @else 
                    <li   class="nav-item">
                        <a  class="nav-link" href="{{ route('register') }}"   id=  "testimonio">Registro</a> 
                    </li>
                    <li   class="nav-item">
                        <a  class="nav-link" href="{{ route('login') }}" id=  "contacto">Iniciar sesion
                        </a> 
                    </li>
                    @endif


                </ul>
            </div>
        </div>
    </nav>

    <!-- seccion imagen -->

    
</body>

</html>