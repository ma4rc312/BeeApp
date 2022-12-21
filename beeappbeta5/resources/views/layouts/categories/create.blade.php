@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2>Registro de categorias</h2>
<form action="{{route('categorias.store')}}" enctype="multipart/form-data" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
          
          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Nombre: </label><br>
            <input type="text" name="nombre_categoria"><br><br>
          </div>

          <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Descripcion: </label><br>
            <input type="text" name="descripcion_categoria"><br><br>
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
