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
        <th scope="col">Nit</th>
        <th scope="col">Identificacion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Direccion</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr>
            <th scope="row">{{$client->id}}</th>
            <td>
              <a target="_blank" href="{{asset('pdf2/'.$client->nit_us)}}">NIT</a>
            </td>
            <td>
              <a target="_blank" href="{{asset('pdf/'.$client->identificacion_us)}}">Identificación</a>
            </td>
            <td>{{$client->telefono_us}}</td>
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
