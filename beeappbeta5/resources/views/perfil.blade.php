@extends('layouts.app')
@include('partials.navbar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <link href="{{ asset('css/concientizacion.css') }}" rel="stylesheet" />
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
     <link  href="{{asset('css/perfil.css')}}" rel="stylesheet"/>
    
    <title>concientizacion</title>
</head>

<body>
    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="http://localhost/multimedia/relleno/img-c9.png" alt="img-avatar">
                    <button type="button" class="boton-avatar">
                        <i class="far fa-image"></i>
                    </button>
                </div>
                <button type="button" class="boton-portada">
                    <i class="far fa-image"></i> Cambiar fondo
                </button>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo">VIVIAN MELISA ESCOBAR</h3>
                <p class="texto">Te ofrecemos los mejores productos del deapartamento del cauca 100% natural.</p>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class=""></i> Nombre:</li>
                    <li><i class=""></i>Correo electronico:</li>
                    <li><i class=""></i> Telefono:</li>
                </ul>
            </div>
            
        </div>
    </section>
   <section class="productos">
    <h2 >Mis productos</h2>
    <ul class="lista-datos">
        <li><i class="icono fas fa-map-signs"></i> Gmail:</li>
        <li><i class="icono fas fa-map-signs"></i> Direccion de usuario:</li>
        <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
    </ul>
    <ul class="lista-datos">
        <li><i class="icono fas fa-map-signs"></i> Gmail:</li>
        <li><i class="icono fas fa-map-signs"></i> Direccion de usuario:</li>
        <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
    </ul>
    <ul class="lista-datos">
        <li><i class="icono fas fa-map-signs"></i> Gmail:</li>
        <li><i class="icono fas fa-map-signs"></i> Direccion de usuario:</li>
        <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
    </ul>
    <ul class="lista-datos">
        <li><i class="icono fas fa-map-signs"></i> Gmail:</li>
        <li><i class="icono fas fa-map-signs"></i> Direccion de usuario:</li>
        <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
    </ul>
    <ul class="lista-datos">
        <li><i class="icono fas fa-map-signs"></i> Gmail:</li>
        <li><i class="icono fas fa-map-signs"></i> Direccion de usuario:</li>
        <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
    </ul>
    <ul class="lista-datos">
        <li><i class="icono fas fa-map-signs"></i> Gmail:</li>
        <li><i class="icono fas fa-map-signs"></i> Direccion de usuario:</li>
        <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
    </ul>
    <ul class="lista-datos">
        <li><i class="icono fas fa-map-signs"></i> Gmail:</li>
        <li><i class="icono fas fa-map-signs"></i> Direccion de usuario:</li>
        <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
    </ul>
    <ul class="lista-datos">
        <li><i class="icono fas fa-map-signs"></i> Gmail:</li>
        <li><i class="icono fas fa-map-signs"></i> Direccion de usuario:</li>
        <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
    </ul><ul class="lista-datos">
        <li><i class="icono fas fa-map-signs"></i> Gmail:</li>
        <li><i class="icono fas fa-map-signs"></i> Direccion de usuario:</li>
        <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
    </ul><ul class="lista-datos">
        <li><i class="icono fas fa-map-signs"></i> Gmail:</li>
        <li><i class="icono fas fa-map-signs"></i> Direccion de usuario:</li>
        <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
    </ul>
    <ul class="lista-datos">
        <li><i class="icono fas fa-map-signs"></i> Gmail:</li>
        <li><i class="icono fas fa-map-signs"></i> Direccion de usuario:</li>
        <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
    </ul><ul class="lista-datos">
        <li><i class="icono fas fa-map-signs"></i> Gmail:</li>
        <li><i class="icono fas fa-map-signs"></i> Direccion de usuario:</li>
        <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
    </ul><ul class="lista-datos">
        <li><i class="icono fas fa-map-signs"></i> Gmail:</li>
        <li><i class="icono fas fa-map-signs"></i> Direccion de usuario:</li>
        <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
    </ul>






   </section>
   
</body>
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


</html>
