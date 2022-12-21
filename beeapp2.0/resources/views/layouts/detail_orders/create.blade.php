@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h2>Registro de Detalle de pedidos</h2>
    <form action="{{ route('detallePedido.store') }}" enctype="multipart/form-data" method="post">
        <!-- csrf_field es un metodo de autenticacion token -->
        {{ csrf_field() }}
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Producto: </label><br>
                    <select name="producto_id"class="form-select" aria-label="Default select example">
                        <option selected>Producto</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->nombre_producto }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Cantidad: </label><br>
                    <input type="text" name="cantidad"><br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Precio unitario: </label><br>
                    <input type="text" name="precio_unitario"><br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Precio total: </label><br>
                    <input type="text" name="precio_total"><br><br>
                </div>

                <button type="submit" class="btn btn-primary">Registrar</button>


    </form>
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    
    @section('js')
        <script> console.log('Hi!'); </script>
    @stop
    
