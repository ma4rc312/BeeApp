@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2>Registro de productores</h2>
<form action="{{route('productores.store')}}" enctype="multipart/form-data" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Nombre: </label><br>
                <input type="text" name="nombre_prod"><br><br>
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Apellido: </label><br>
                <input type="text" name="apellido_prod"><br><br>
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Numero de cedula: </label><br>
                <input type="text" name="cedula_prod"><br><br>
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Identificacion comercial: </label><br>
                <input type="text" name="identificacion_comercial"><br><br>
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Razon social: </label><br>
                <input type="text" name="razon_social"><br><br>
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Email: </label><br>
                <input type="text" name="email_prod"><br><br>
            </div>
            
            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Password: </label><br>
                <input type="text" name="password"><br><br>
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Telefono: </label><br>
                <input type="text" name="telefono_prod"><br><br>
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Direccion: </label><br>
                <input type="text" name="direccion"><br><br>
            </div>


          <button type="submit" class ="btn btn-primary">Registrar</button>


</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
