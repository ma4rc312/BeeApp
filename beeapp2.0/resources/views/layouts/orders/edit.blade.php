@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h2>Edición del detalle del pedido No. {{ $order->id }}</h2>
    <form action="{{ route('pedido.update', $order->id) }}" method="post">
        <!-- csrf_field es un metodo de autenticacion token -->
        @csrf
        @method('PUT')
        {{ csrf_field() }}
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Usuario: </label><br>
                    <select name="usuario_id"class="form-select" aria-label="Default select example">
                        <option selected>Usuario</option>
                        @foreach ($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->nombres_us }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Detalle pedido: </label><br>
                    <select name="detalle_pedido_id"class="form-select" aria-label="Default select example">
                        <option selected>Detalle pedido</option>
                        @foreach ($detail_orders as $detail_order)
                            <option value="{{ $detail_order->id }}">{{ $detail_order->producto_id }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Fecha pedido: </label><br>
                    <input type="text" name="fecha_pedido"
                        value="{{ $order->fecha_pedido }}">
                    <br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Estado del pedido: </label><br>
                    <input type="text" name="estado_pedido" value="{{ $order->estado_pedido }}">
                    <br><br>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Valor total: </label><br>
                    <input type="text" name="valor_total" value="{{ $order->valor_total }}">
                    <br><br>
                </div>
                <br><br>


                <button type="submit" class="btn btn-primary">Editar</button>


    </form>
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    
    @section('js')
        <script> console.log('Hi!'); </script>
    @stop
    
