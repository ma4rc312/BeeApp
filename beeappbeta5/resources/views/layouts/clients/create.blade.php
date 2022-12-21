@extends('adminlte::page')

@section('title','Dashboard')
<link  href="{{asset('css/Rcliente.css')}}" rel="stylesheet">
@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   
    <form class="form-registro" action="{{ route('clientes.store') }}" enctype="multipart/form-data" method="post">
        <h1 class="titulo">Registro como apicultores</h1>
        <!-- csrf_field es un metodo de autenticacion token -->
        {{ csrf_field() }}
        <section .form-registro h2 > 
        

            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Nit: </label><br>
                    <input  type="file" name="nit_us"><br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label class="text" for="">Telefono: </label><br>
                    <input  class="control"type="text" name="telefono_us"><br><br>
                </div>

                
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Identificacion: </label><br>
                    <input type="file" name="identificacion_us"><br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label class="text" for="">Direccion: </label><br>
                    <input class="control" type="text" name="Direccion"><br><br>
                </div>

                <button type="submit" class="boton">Registrar</button>


    </form>
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    
@stop

@section('js')

    <script>
    
    </script>
@stop

