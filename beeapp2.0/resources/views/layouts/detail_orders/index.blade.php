@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2>Listado de detalles de pedido</h2>

  <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Productos</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Precio unitario</th>
          <th scope="col">Precio total</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($detail_orders as $detail_order)
          <tr>
              <th scope="row">{{$detail_order->id}}</th>
              <td>{{$detail_order->producto_id}}</td>
              <td>{{$detail_order->cantidad}}</td>
              <td>{{$detail_order->precio_unitario}}</td>
              <td>{{$detail_order->precio_total}}</td>

              <!---->
              <td>
                <a href="{{route('detallePedido.edit',$detail_order)}}" class="btn btn-info btn-sm" role="button" aria-disabled="true">editar</a>
              </td>

              <td>
                <form action="{{route('detallePedido.destroy',$detail_order)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                </form>

              </td>

          </tr>

          @endforeach

      </tbody>
    </table>

    {{$detail_orders->links()}}
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">

    @stop

    @section('js')
    <script>

      </script>>
    @stop

