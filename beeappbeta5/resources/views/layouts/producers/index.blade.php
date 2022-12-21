@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2>Listado de productores</h2>

  <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Cedula</th>
          <th scope="col">Identificacion comercial</th>
          <th scope="col">Razon social</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Telefono</th>
          <th scope="col">Direccion</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($producers as $producer)
          <tr>
              <th scope="row">{{$producer->id}}</th>
              <td>{{$producer->nombre_prod}}</td>
              <td>{{$producer->apellido_prod}}</td>
              <td>{{$producer->cedula_prod}}</td>
              <td>{{$producer->identificacion_comercial}}</td>
              <td>{{$producer->razon_social}}</td>
              <td>{{$producer->email_prod}}</td>
              <td>{{$producer->password}}</td>
              <td>{{$producer->telefono_prod}}</td>
              <td>{{$producer->direccion}}</td>

              <!---->
              <td>
                <a href="{{route('productores.edit',$producer)}}" class="btn btn-info btn-sm" role="button" aria-disabled="true">editar</a>
              </td>

              <td>
                <form action="{{route('productores.destroy',$producer)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                </form>

              </td>

          </tr>

          @endforeach

      </tbody>
    </table>

    {{$producers->links()}}
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">

    @stop

    @section('js')
    <script>

      </script>>
    @stop
