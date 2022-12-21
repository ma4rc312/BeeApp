@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h2 class="titulo_pro">Registro de clientes</h2>
    <form action="{{ route('clientes.store') }}" enctype="multipart/form-data" method="post">
        <!-- csrf_field es un metodo de autenticacion token -->
        {{ csrf_field() }}
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Nombre: </label><br>
                    <input type="text" name="nombres_us"><br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Apellido: </label><br>
                    <input type="text" name="apellidos_us"><br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Identificacion: </label><br>
                    <input type="text" name="identificacion_us"><br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Telefono: </label><br>
                    <input type="text" name="telefono_us"><br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Email: </label><br>
                    <input type="text" name="email_us"><br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Password: </label><br>
                    <input type="text" name="password_us"><br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Direccion: </label><br>
                    <input type="text" name="Direccion"><br><br>
                </div>

                <button type="submit" class="btn btn-primary">Registrar</button>


    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    
@stop

@section('js')

    <script>
    
    </script>
@stop

