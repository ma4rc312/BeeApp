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
    
    <title>concientizacion</title>
</head>

<body>
    
    <h1 class="titulo">Conoce la importancia de la abejas, cual es su funcion en el mundo y que podemos hacer para protegerlas.</h1><br>
    <div class="video   ">
        <video width="500"  height ="300"  src="images/beeeapp.mp4 " controls autoplay alt=""></video>
        
    </div>
    
    <p class="texto"> las abejas es, según defiende esta iniciativa, un esfuerzo en manos de todos, tanto de los gobiernos nacionales que manejan las políticas agrarias y climáticas que afectan a los hábitats y el bienestar de las abejas como de los organismos municipales y también los particulares que cuidan y diseñan parques y jardines públicos o privados. Incluso las personas que cuidan plantas en sus ventanas y balcones pueden poner su granito de arena para cuidar de las abejas y demás polinizadores que son parte imprescindible de nuestros ecosistemas. <br><br>

    Si tienes un jardín, o si de alguna forma puedes influir en el diseño y mantenimiento de los parques de tu municipio, incluso si estás pensando con qué decorar las macetas de tu edificio, aquí van algunas ideas directas de las cuidadoras del Pollinator Garden, perteneciente al Smithsonian, que se encargan de crear el ambiente perfecto para que las abejas sobrevivan y se reproduzcan en las mejores condiciones.</p>
    <div class="video   ">
        <video width="500"  height ="300"  src="images/beeeapp_1.mp4 " controls autoplay alt=""></video>
        
    </div>
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
