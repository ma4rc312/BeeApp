@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h2>Edición del productor No. {{ $producer->id }}</h2>
    <form action="{{ route('productores.update', $producer->id) }}" method="post">
        <!-- csrf_field es un metodo de autenticacion token -->
        @csrf
        @method('PUT')
        {{ csrf_field() }}
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Nombre: </label><br>
                    <input type="text" name="nombre_prod" value="{{ $producer->nombre_prod }}">
                    <br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Apellido: </label><br>
                    <input type="text" name="apellido_prod" value="{{ $producer->apellido_prod }}">
                    <br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Numero de cedula: </label><br>
                    <input type="text" name="cedula_prod" value="{{ $producer->cedula_prod }}">
                    <br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Identificacion comercial: </label><br>
                    <input type="text" name="identificacion_comercial" value="{{ $producer->identificacion_comercial }}">
                    <br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Razon social: </label><br>
                    <input type="text" name="razon_social" value="{{ $producer->razon_social }}">
                    <br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Email: </label><br>
                    <input type="text" name="email_prod" value="{{ $producer->email_prod }}">
                    <br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Password: </label><br>
                    <input type="text" name="password" value="{{$producer->password}}">
                    <br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Telefono: </label><br>
                    <input type="text" name="telefono_prod" value="{{$producer->telefono_prod}}">
                    <br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Direccion: </label><br>
                    <input type="text" name="direccion" value="{{$producer->direccion}}">
                    <br><br>
                </div>

            <button type="submit" class="btn btn-primary">Editar</button>
    </form>
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    
    @section('js')
        <script> console.log('Hi!'); </script>
    @stop
    
