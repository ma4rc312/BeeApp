@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2>Listado de productos</h2>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Productores</th>
        <th scope="col">Categoria</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Fecha</th>
        <th scope="col">Fecha vencimiento</th>
        <th scope="col">Estado</th>
        <th scope="col">Imagen</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->productor_id}}</td>
            <td>{{$product->categoria_id}}</td>
            <td>
              <a href="{{route('productos.show',$product)}}">
                {{$product->nombre_producto}}
              </a>

            </td>
            <td>{{$product->descripcion_producto}}</td>
            <td>{{$product->cantidad_producto}}</td>
            <td>{{$product->fecha_producto}}</td>
            <td>{{$product->fecha_ven_producto}}</td>
            <td>{{$product->estado_producto}}</td>
            <td>
              <div class="imagen">
                  <img class=" img-fluid" src="{{asset('img/'.$product->imagen_producto)}}"alt="">
              </div>
          </td>

            <!---->
            <td>
              <a href="{{route('productos.edit',$product)}}" class="btn btn-info btn-sm" role="button" aria-disabled="true">editar</a>
            </td>

            <td>
              <form action="{{route('productos.destroy',$product)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
              </form>

            </td>

        </tr>

        @endforeach

    </tbody>
  </table>

  {{$products->links()}}
  @stop

  @section('css')
      <link rel="stylesheet" href="/css/admin_custom.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

      <style>
          img {
              width: 200px;
              /* ANCHO_IMAGEN */
              border: solid silver 1px;
              height: 200px;
              /* ALTO_IMAGEN */
              background-position: center center;
              /* Centrado

         de imagen*/

              background-repeat: no-repeat;
          }

          .grid {
              display: grid;
              grid-template-columns: 1fr 1fr;
              gap: 4px;
          }

          .grid a,
          button {
              width: 40px;
          }
      </style>
  @stop

  @section('js')
  <script>
    function ocultarAlerta() {
    document.querySelector(".alert").style.display

    = 'none';
    }
    setTimeout(ocultarAlerta,3000);
    // vista previa de la imagen
    let vistaPrevia = ()=>{
    let leerImg = new FileReader();

    let id_img = document.getElementById('img-foto');

    leerImg.onload = ()=>{
    if (leerImg.readyState == 2) {
      id_img.src = leerImg.result;
    }
    }
    leerImg.readAsDataURL(event.target.files[0])
    }
    </script>>
  @stop
