@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2>Listado de categorias</h2>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Categoria</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $categorie)
        <tr>
            <th scope="row">{{$categorie->id}}</th>
            <td>{{$categorie->nombre_categoria}}</td>
            <td>{{$categorie->descripcion_categoria}}</td>

            <!---->
            <td>
              @can('categorias.edit')
              <a href="{{route('categorias.edit',$categorie)}}" class="btn btn-info btn-sm" role="button" aria-disabled="true">editar</a>
              @endcan
            </td>

            <td>
              @can('categorias.destroy')
                <form action="{{route('categorias.destroy',$categorie)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                </form>
              @endcan
              

            </td>

        </tr>

        @endforeach

    </tbody>
  </table>

  {{$categories->links()}}
  @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
<script>

  </script>>
@stop



