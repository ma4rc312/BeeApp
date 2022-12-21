@extends('layouts.app')
@include('partials.navbar')
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


</head>

<body class="body_12">
    @extends('layouts.app')

    <div class="hero_area">
        <div class="bg-box">
            <img  style="width: 120em; height: 37em; margin-left:em"  src="images/1.gif" alt="">
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
                                </ul>
                            </div>
                        </ul>
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
                                        <h1>
                                            BEEAPP
                                        </h1>
                                        <p>
                                            un equipo de desarrolladores web del departamento del cauca especialistas en
                                            el diseño maquetacion y puesta en marcha de paginas web para todo tipo de
                                            degocio.
                                        </p>
                                        <div class="btn-box">
                                            <a href="/.#somos" class="btn1">
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
                                            Salvemos a las Abejas
                                        </h1>
                                        <p>
                                            Proteger a las abejas es cuidar la biodiversidad y convivir de manera
                                            armoniosa con la naturaleza, ellas son parte de nuestro ecosistema y nos
                                            ayudan a conservarlo, son parte esencial de la vida.
                                        </p>
                                        <div class="btn-box">
                                            <a href="/concientizacion"
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
  

    
   


    <section id="productos" class="food_section layout_padding" id="Divpadre">
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
                                    <img src="{{ asset('img/' . $pro->imagen_producto) }}" class="img-fluid"
                                        alt="{{ $pro->image_path }}">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        {{ $pro->nombre_producto }}
                                    </h5>
                                    <p>
                                        {{ $pro->descripcion_producto }} <BR><BR>
                                    </p>
                                    <p>
                                        {{ $pro->precio }} <BR><BR>
                                    </p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id"
                                            name="id">
                                        <input type="hidden" value="{{ $pro->nombre_producto }}" id="name"
                                            name="name">
                                        <input type="hidden" value="{{ $pro->precio }}" id="price"
                                            name="price">
                                        <input type="hidden" value="{{ $pro->imagen_producto }}" id="img"
                                            name="img">

                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer">
                                            <div class="row">

                                                @if (Auth::user())
                                                    <button class="btn btn-sm" class="tooltip-test"
                                                        title="add to cart">
                                                        <i class="fa fa-shopping-cart">

                                                            <div class="options">
                                                                <h6>
                                                                </h6>
                                                                <a href="">
                                                                    <svg version="1.1" id="Capa_1"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        x="0px" y="0px"
                                                                        viewBox="0 0 456.029 456.029"
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
                                                @else
                                                    <div class="options">
                                                        <h6>
                                                        </h6>
                                                        <a href="{{ route('login') }}">
                                                            <svg version="1.1" id="Capa_1"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                x="0px" y="0px"
                                                                viewBox="0 0 456.029 456.029"
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
                                                @endif
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

    <section id="somos" class="about_section layout_padding">
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
                        <a href="/.#footer">
                            CONTACTANOS
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->



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
                                    Scrum Master - desarrollador Front end - WEB Y ANDROID
                                <h6>
                                    Einer Erazo
                                </h6>
                                <p>
                                    ADSI 2338368
                                </p>
                            </div>
                            <div class="img-box">
                                <img src="images/EINER.png" alt="" class="box-img">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="box">
                            <div class="detail-box">
                                <p>
                                    Scrum Team desarrollador Front end - WEB Y ANDROID
                                <h6>
                                    Melisa Escobar
                                </h6>
                                <p>
                                    ADSI 2338368
                                </p>
                            </div>
                            <div class="img-box">
                                <img src="images/MELISSA.png" alt="" class="box-img">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="detail-box">
                                <p>
                                    Scrum Team desarrollador Back end - WEB Y ANDROID
                                </p>
                                <h6>
                                    Jhoan Sebastian Chilito
                                </h6>
                                <p>
                                    ADSI 2338368
                                </p>
                            </div>
                            <div class="img-box">
                                <img src="images/MELISSA.png" alt="" class="box-img">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="box">
                            <div class="detail-box">
                                <p>
                                    Scrum Team desarrollador Back end - WEB Y ANDROID
                                </p>
                                <h6>
                                    Yuri Marcela Lucio
                                </h6>
                                <p>
                                    ADSI 2338368
                                </p>
                            </div>
                            <div class="img-box">
                                <img src="images/yurim.png" alt="" class="box-img">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="box">
                            <div class="detail-box">
                                <p>
                                    Scrum Team desarrollador Back end - WEB Y ANDROID
                                </p>
                                <h6>
                                    Edinson Hormiga Reyes
                                </h6>
                                <p>
                                    ADSI 2338368
                                </p>
                            </div>
                            <div class="img-box">
                                <img src="images/edinson.png" alt="" class="box-img">
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="box">
                            <div class="detail-box">
                                <p>
                                    Scrum Team desarrollador Back end - WEB Y ANDROID
                                </p>
                                <h6>
                                    Hellen Andrea Bermudez
                                </h6>
                                <p>
                                    ADSI 2338368
                                </p>
                            </div>
                            <div class="img-box">
                                <img src="images/HELEN.jpeg" alt="" class="box-img">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="detail-box">
                                <p>
                                    Product Owner desarrollador Front end - WEB Y ANDROID
                                </p>
                                <h6>
                                    Sebastian Alexander Peña
                                </h6>
                                <p>
                                    ADSI 2338368
                                </p>
                            </div>
                            <div class="img-box">
                                <img src="images/MELISSA.png" alt="" class="box-img">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="detail-box">
                                <p>
                                    Scrum Team desarrollador Front end - WEB Y ANDROID
                                </p>
                                <h6>
                                    Dayana Ordoñez
                                </h6>
                                <p>
                                    ADSI 2338368
                                </p>
                            </div>
                            <div class="img-box">
                                <img src="images/dayana.jpeg" alt="" class="box-img">
                            </div>
                        </div>
                    </div>


                    


                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <!-- end client section -->

    <!-- footer section -->
    <footer id="footer" class="footer_section">
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
                <br><br><br>
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
                    &copy; <span id="displayYear"></span> todos los derechos reservados por: <br><br>
                    <a href="https://html.design/">Free Html Templates</a><br><br>
                    &copy; <span id="displayYear"></span> programado por:
                    <a href="https://themewagon.com/" target="_blank">Proyecto BEEAPP</a>



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
