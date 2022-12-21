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

    <h6 id="consejos" style="background: orange" class=" sticky-top margin-bottom:"><a
            href="https://bogota.gov.co/mi-ciudad/ambiente/conoce-la-primera-clinica-para-panales-de-abejas-rescatados-en-bogota"
            style="color: black">&nbsp;&nbsp;&nbsp; Consejos y tips </a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<a
            href="/lineas" style="color: black">lineas de emergencia</a> </h6>


    <!-- end client section -->

    <!-- footer section -->
    <footer id="footer" class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">

                    </div>
                </div>
             
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="" class="footer-logo" style="color: orange">
                            LINEAS DE EMERGENCIA

                        </a>
                        <div class="footer_detail">
                            <h4 class="text" style="font-size: 20px" style="text-decoration: none">
                               <a href="https://portal.gestiondelriesgo.gov.co/"> Número Único Nacional Emergencias </a><br><p style="color:orange">123</p>
                            </h4>
                        </div><br>
                        <div class="footer_detail">
                            <h4 class="text" style="font-size: 20px">
                               <a href="https://bomberospopayan.co/"> Bomberos</a> <br><p style="color:orange">119</p>
                            </h4>
                        </div><br> 
                        <div class="footer_detail">
                            <h4 class="text" style="font-size: 20px">
                               <a href="https://www.defensacivil.gov.co/nuestra-institucion-1/seccionales/cauca"> Defensa Civil</a><br><p style="color:orange">144</p>
                            </h4>
                        </div><br>
                        <div class="footer_detail">
                            <h4 class="text" style="font-size: 20px">
                               <a href="https://www.cruzrojacolombiana.org/desarrollo-de-seccionales/"> Cruz Roja</a><br><p style="color:orange">132</p>
                            </h4>
                        </div><br>
                        <div class="footer_detail">
                            <h4 class="text" style="font-size: 20px">
                               <a href="https://www.saludcauca.gov.co/"> Secretaría de Salud  Ambulancias</a><br><p style="color:orange">125</p>
                            </h4>
                        </div>
                    </div>
                </div>
                
            </div>
           
        </div>
        
        <h6 id="consejos" style="background: orange" class=" sticky-top margin-bottom:"><a
                href="https://bogota.gov.co/mi-ciudad/ambiente/conoce-la-primera-clinica-para-panales-de-abejas-rescatados-en-bogota"
                style="color: black">
            &nbsp;<a href="" style="color: black"></a> </h6>

    </footer>
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
