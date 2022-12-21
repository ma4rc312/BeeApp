@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2>Listado de clientes</h2>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Identificacion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Direccion</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr>
            <th scope="row">{{$client->id}}</th>
            <td>{{$client->nombres_us}}</td>
            <td>{{$client->apellidos_us}}</td>
            <td>{{$client->identificacion_us}}</td>
            <td>{{$client->telefono_us}}</td>
            <td>{{$client->email_us}}</td>
            <td>{{$client->password_us}}</td>
            <td>{{$client->Direccion}}</td>

            <!---->
            <td>
              <a href="{{route('clientes.edit',$client)}}" class="btn btn-info btn-sm" role="button" aria-disabled="true">editar</a>
            </td>

            <td>
              <form action="{{route('clientes.destroy',$client)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
              </form>

            </td>

        </tr>

        @endforeach

    </tbody>
  </table>

  {{$clients->links()}}
  @stop

  @section('css')
      <link rel="stylesheet" href="/css/admin_custom.css">
      
  @stop

  @section('js')
  <script>
    
    </script>
  @stop
