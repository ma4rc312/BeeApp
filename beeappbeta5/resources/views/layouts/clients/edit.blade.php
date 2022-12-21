@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h2>Edición del cliente No. {{ $client->id }}</h2>
    <form action="{{ route('clientes.update', $client->id) }}" method="post">
        <!-- csrf_field es un metodo de autenticacion token -->
        @csrf
        @method('PUT')
        {{ csrf_field() }}
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-4 col-sm-2">
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Nit: </label><br>
                    <input class="text2" type="text" name="nit_us" value="{{ $client->nit_us }}">
                    <br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Identificacion: </label><br>
                    <input class="text2" type="text" name="identificacion_us" value="{{ $client->identificacion_us }}">
                    <br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Telefono: </label><br>
                    <input class="text2" type="text" name="telefono_us" value="{{ $client->telefono_us }}">
                    <br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Direccion: </label><br>
                    <input class="text2" type="text" name="Direccion" value="{{ $client->Direccion }}">
                    <br><br>
                </div>

                <button type="submit" class="btn btn-primary">Editar</button>


    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style type="text/css">
        img {
            width: 300px;
            /* ANCHO_IMAGEN */
            border: solid silver 1px;
            height: 300px;
            /* ALTO_IMAGEN */
            background-position: center center;
            /* Centrado de imagen*/

            background-repeat: no-repeat;
        }

        .btn-file {
            position: relative;
            overflow: hidden;
            width: 100px;
        }

        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }

        .btn-file i {
            font-size: 23px;
        }

        .imagen img {
            max-width: 100%;
            max-height: 50vh;
        }
    </style>
@stop

@section('js')
    <script>
        function ocultarAlerta() {
            document.querySelector(".alert").style.display

            = 'none';
        }
        setTimeout(ocultarAlerta, 3000);
        // vista previa de la imagen
        let vistaPrevia = () => {
            let leerImg = new FileReader();

            let id_img = document.getElementById('img-foto');

            leerImg.onload = () => {
                if (leerImg.readyState == 2) {
                    id_img.src = leerImg.result;
                }
            }
            leerImg.readAsDataURL(event.target.files[0])
        }
    </script>
@stop
