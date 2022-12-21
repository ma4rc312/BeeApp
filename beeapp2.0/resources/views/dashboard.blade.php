<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">

    <title> BEEAPP </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
        crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

    <link href="{{ asset('css/stilo.css') }}" rel="stylesheet" />


</head>

<body class="body">
    <div id="nav">    
        <nav class="menu">
            <img src="images/about-img.png" alt="" class="img_logo"">
    <li class="nav-item">
        
        <a class="nav-link" href="#" id="about">Inicio</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('productos.index') }}"
            id="about">Productos</a>
    </li>

    @if (Auth::user())
        <li class="nav-item">
            <a class="nav-link" href="{{ route('productos.create') }}"
                id="portafolio">Subir producto</a>
        </li>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-   secondary">LogOUT</button>
        </form>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}"
                id="testimonio">Registro</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}" id="contacto">Iniciar
                sesion
            </a>
        </li>
    @endif

    <input type="text" name="text" class="input" placeholder="Buscar ....">
    <button class="search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg></button>
    
    </div>

</ul>
</div>
</nav>
</ul>
</div>



    <div class="hero_area">
        <div class="bg-box">
            <img class="img_fondo" src="images/beeee.gif" alt="">
        </div>
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">


                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">


                        <!-- -->
                        <ul class="navbar-nav  mx-auto ">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id="home">
                                            <ion-icon name="home-outline"></ion-icon>
                                        </a>


                                    </li>

                                    





                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1 class="bee">
                                            BEEAPP
                                        </h1>
                                        <p>
                                            un equipo de desarrolladores web del departamento del cauca especialistas en
                                            el diseño maquetacion y puesta en marcha de paginas web para todo tipo de
                                            degocio.
                                        </p>
                                        <div class="btn-box">
                                            <a href="quienes_somos.html" class="btn1">
                                                CONOCE MAS...
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            FEDEABEJAS
                                        </h1>
                                        <p>
                                            Federación Colombiana de Apicultores y Criadores de Abejas; Es una
                                            agremiación que reúne los más emblemáticos apicultores del país.
                                        </p>
                                        <div class="btn-box">
                                            <a href="https://www.fedeabejas.com/" class="btn1">
                                                CONOCE MAS...
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Cuidamos la especie
                                        </h1>
                                        <p>
                                            Proteger a las abejas es cuidar la biodiversidad y convivir de manera
                                            armoniosa con la naturaleza, ellas son parte de nuestro ecosistema y nos
                                            ayudan a conservarlo, son parte esencial de la vida.
                                        </p>
                                        <div class="btn-box">
                                            <a href="https://bogota.gov.co/mi-ciudad/ambiente/por-que-es-importante-cuidar-las-abejas"
                                                class="btn1">
                                                CONOCE MAS...
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <ol class="carousel-indicators">
                        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#customCarousel1" data-slide-to="1"></li>
                        <li data-target="#customCarousel1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>

        </section>
        <!-- end slider section -->
    </div>

    <!-- offer section -->

    <section class="offer_section layout_padding-bottom">
        <div class="offer_container">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6  ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/o1.jpg" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    MIEL BEEAPP
                                </h5>
                                <h6>
                                    <span>20%</span> DE DESCUENTO
                                </h6>
                                <a href="">
                                    PIDELA AHORA <svg version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 456.029 456.029"
                                        style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                     C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6  ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/o2.jpg" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    CERA LA MIEL DE LA VIDA
                                </h5>
                                <h6>
                                    <span>15%</span> DE DESCUENTO
                                </h6>
                                <a href="">
                                    PIDELA AHORA<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 456.029 456.029"
                                        style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                     C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end offer section -->

    <!-- food section -->

    <section class="food_section layout_padding" id="Divpadre">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    PRODUCTOS
                </h2>
            </div>

            <div class="container">
                <div class="row">
                    @foreach ($categories as $categorie)
                        <ul class="filters_menu" id="category">
                            <li style="margin: 10px" class="active">
                                {{ $categorie->nombre_categoria }}
                            </li>
                        </ul>
                    @endforeach
                </div>

            </div>

            <div class="container-fluid">
                <div class="row ">



                    {{-- <div class="col-sm-6 col-lg-4 all burger"> --}}
                        @foreach ($products as $pro)
                            <div class="box" style="margin: 10px">
                                <div>
                                    <div class="img-box">
                                        <img src="{{ asset('img/' . $pro->imagen_producto) }}" 
                                        class="img-fluid"
                                            alt="{{ $pro->image_path }}">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            {{$pro->nombre_producto}}
                                        </h5>
                                        <p>
                                            {{ $pro->descripcion_producto }} <BR><BR>
                                        </p>
                                        <p>
                                            {{ $pro->precio }} <BR><BR>
                                        </p>
                                        <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->nombre_producto }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->precio }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->imagen_producto }}" id="img" name="img">
                                        
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer">
                                              <div class="row">
                                                <button class="btn btn-sm" class="tooltip-test" title="add to cart">
                                                    <i class="fa fa-shopping-cart">
                                                        
                                                        <div class="options">
                                                            <h6>
                                                            </h6>
                                                            <a href="">
                                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                    y="0px" viewBox="0 0 456.029 456.029"
                                                                    style="enable-background:new 0 0 456.029 456.029;"
                                                                    xml:space="preserve">
                                                                    <g>
                                                                        <g>
                                                                            <path
                                                                                d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                                                        </g>
                                                                    </g>
                                                                    <g>
                                                                        <g>
                                                                            <path
                                                                                d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                                                        </g>
                                                                    </g>
                                                                    <g>
                                                                        <g>
                                                                            <path
                                                                                d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                                                        </g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    
                                                    
                                                    </i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    {{-- </div> --}}





                </div>
            </div>



            
            <div class="btn-box">
                <a href="{{ route('shop') }}">
                    VER MAS...
                </a>
            </div>
        </div>
    </section>

    <!-- end food section -->

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container  ">

            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="images/about-img.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                SOMOS BEEAPP
                            </h2>
                        </div>
                        <p>Somos una empresa dedicada a la generacion de lazos comerciales entre los apicultores,
                            empresas y clientes en general, nuestro objetivo es que los pequeños y medianos productores
                            apicolas
                            en ubicados en las zonas rurales se puedan mostrar y comercializar sus productos, con las
                            mismas oportunidades y veneficios de las grandes empresas.
                            <br><br>Somos un grupo de desarrolladores pertenecientes al programa adsi del Sena Regional
                            Cauca.
                        </p>
                        <a href="">
                            CONOCE MAS...
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- book section -->
    <section class="book_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    FORMULARIO DE REGISTRO
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container">
                        <form action="">
                            <div>
                                <input type="text" class="form-control" placeholder="Su nombre" />
                            </div>
                            <div>
                                <input type="text" class="form-control" placeholder="Numero de telefono" />
                            </div>
                            <div>
                                <input type="email" class="form-control" placeholder="Correo electronico" />
                            </div>
                            <div>
                                <select class="form-control nice-select wide">
                                    <option value="" disabled selected>
                                        Como deseas registrarte?
                                    </option>
                                    <option value="">
                                        Apiculor
                                    </option>
                                    <option value="">
                                        Empresa
                                    </option>
                                    <option value="">
                                        Cliente
                                    </option>

                                </select>
                            </div>
                            <div>
                                <input type="date" class="form-control">
                            </div>
                            <div class="btn_box">
                                <button>
                                    REGISTRATE
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_container ">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end book section -->

    <!-- client section -->

    <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center psudo_white_primary mb_45">
                <h2>
                    DESARROLLADORES
                </h2>
            </div>
            <div class="carousel-wrap row ">
                <div class="owl-carousel client_owl-carousel">
                    <div class="item">
                        <div class="box">
                            <div class="detail-box">
                                <p>
                                    Desarrolladora web especialista en bases de datos
                                </p>
                                <h6>
                                    Vivian Melissa Escobar
                                </h6>
                                <p>
                                    ADSI 2338368
                                </p>
                            </div>
                            <div class="img-box">
                                <img src="images/client1.jpg" alt="" class="box-img">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="detail-box">
                                <p>
                                    Desarrollador web, orientado a la programacion en php.
                                </p>
                                <h6>
                                    Einer Erazo Romero
                                </h6>
                                <p>
                                    ADSI 2338368
                                </p>
                            </div>
                            <div class="img-box">
                                <img src="images/client2.jpg" alt="" class="box-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end client section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Contactos
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    ubicacion
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    telefono: 31010101010
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    beeapp368@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="" class="footer-logo">
                            BEEAPP

                        </a>
                        <p>
                            Conoce nuestras redes sociales
                        </p>
                        <div class="footer_social">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <h4>
                        Horario de atencion.
                    </h4>
                    <p>
                        Todos los dias
                    </p>
                    <p>
                        10.00 Am -10.00 Pm
                    </p>
                </div>
            </div>
            <div class="footer-info">
                <p>
                    &copy; <span id="displayYear"></span> todos los derechos reservados por:
                    <a href="https://html.design/">Free Html Templates</a><br><br>
                    &copy; <span id="displayYear"></span> programado por:
                    <a href="https://themewagon.com/" target="_blank">Proyecto BEEAPP</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>









{{--
<x-app-layout>
    <section id="hero">
        <div class="container">

            <div class="content-center topmargin-lg">
                <h1 class="mt-5">Tecno Academia Popayán</h1>
                <p>Te invitamos a que revises nuestras actividades del mes de marzo </p>
                <p> Que esperas para inscribirte desde tu computador o movil</p>

            </div>
        </div>
    </section>

    <!-- seccion portafolio-->
    <section id="portfolio">
        <div class="container-fluid">
            <div class="content-center">
                <h2>Conoce en que estamos trabajando para ti <b>Tecno Academía Popayán</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum. Suscipit expedita obcaecati
                    nesciunt error ut quidem autem.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                            <a href="#">
                                <h2>Marzo mes de deporte y vida</h2>
                            </a>
                            <a href="#">
                                <p>Tecno Academía App</p>
                            </a>
                        </div>
                        <img src="images/deporte.jpg" class="img-fluid" alt="Portfolio 01">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                            <a href="#">
                                <h2>Sociedad y cultura Popayán 2021</h2>
                            </a>
                            <a href="#">
                                <p>Nuevos programas para disfrutar</p>
                            </a>
                        </div>
                        <img src="images/cultura.jpg" class="img-fluid" alt="Portfolio 02">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all burger">
                    @foreach ($products as $product)
                    <div class="box">
                      <div>
                        <div class="img-box">
                          <img src="{{asset('img/'.$product->imagen_producto)}}" class="img-fluid" alt="">
                        </div>
                        <div class="detail-box">
                          <h5>
                            {{$product->nombre_producto}}
                          </h5>
                          <p>
                            {{$product->descripcion_producto}} <BR><BR>
                          </p>
                          <div class="options">
                            <h6>
                              {{$product->fecha_producto}}
                            </h6>
                            <a href="">
                              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                <g>
                                  <g>
                                    <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                 c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                  </g>
                                </g>
                                <g>
                                  <g>
                                    <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                 C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                 c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                 C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                  </g>
                                </g>
                                <g>
                                  <g>
                                    <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                 c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                  </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>

            </div>

        </div>
    </section>

    <!-- pie de pagina footer-->

    <footer class="bgDark">
        <div class="container">

            <small>Todos los derechos reservados. ©2021 </small>
        </div>
    </footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</x-app-layout> --}}
