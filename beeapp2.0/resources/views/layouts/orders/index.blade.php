@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2>Listado de pedidos</h2>

  <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Usuario</th>
          <th scope="col">Detalle pedido</th>
          <th scope="col">Fecha del pedido</th>
          <th scope="col">Estado del pedido</th>
          <th scope="col">Valor total</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($orders as $order)
          <tr>
              <th scope="row">{{$order->id}}</th>
              <td>{{$order->usuario_id}}</td>
              <td>{{$order->detalle_pedido_id}}</td>
              <td>{{$order->fecha_pedido}}</td>
              <td>{{$order->estado_pedido}}</td>
              <td>{{$order->valor_total}}</td>

              <!---->
              <td>
                <a href="{{route('pedido.edit',$order)}}" class="btn btn-info btn-sm" role="button" aria-disabled="true">editar</a>
              </td>

              <td>
                <form action="{{route('pedido.destroy',$order)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                </form>

              </td>

          </tr>

          @endforeach

      </tbody>
    </table>

    {{$orders->links()}}
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">

    @stop

    @section('js')
    <script>

      </script>>
    @stop

