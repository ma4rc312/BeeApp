@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h2 class="titulo_pro">Registro de productos</h2>
    <form action="{{ route('productos.store') }}" enctype="multipart/form-data" method="post">
        <!-- csrf_field es un metodo de autenticacion token -->
        {{ csrf_field() }}
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Productor: </label><br>
                    <select name="productor_id"class="form-select" aria-label="Default select example">
                        <option selected>Productor</option>
                        @foreach ($producers as $producer)
                            <option value="{{ $producer->id }}">{{ $producer->razon_social }}</option>
                        @endforeach
                    </select>
                    <small class="text-danger">{{ $errors->first('productor_id') }}</small>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Categoria: </label><br>
                    <select name="categoria_id"class="form-select" aria-label="Default select example">
                        <option selected>Categoria</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->nombre_categoria }}</option>
                        @endforeach
                    </select>
                    <small class="text-danger">{{ $errors->first('categoria_id') }}</small>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Nombre: </label><br>
                    <input type="text" name="nombre_producto"><br><br>
                    <small class="text-danger">{{ $errors->first('nombre_producto') }}</small>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Descripcion: </label><br>
                    <input type="text" name="descripcion_producto"><br><br>
                    <small class="text-danger">{{ $errors->first('descripcion_producto') }}</small>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12">
                    <label for="">Foto:</label><br>
                    <span class="btn btn-secondary btn-file">
                        <i class="far fa-images"></i>
                        <input accept="images/*" onchange="vistaPrevia(event)"type="file" name="imagen_producto">
                    </span>
                    <small class="text-danger">{{ $errors->first('imagen_producto') }}</small>
        
                </div>
                <div class="imagen col-md-6 col-lg-6col-sm-12">
                    <label for="">Vista previa foto:</label><br>
                    <img src="" id="img-foto" alt="">
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Cantidad: </label><br>
                    <input type="int" name="cantidad_producto"><br><br>
                    <small class="text-danger">{{ $errors->first('cantidad_producto') }}</small>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Fecha: </label><br>
                    <input type="date" name="fecha_producto"><br><br>
                    <small class="text-danger">{{ $errors->first('fecha_producto') }}</small>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Precio: </label><br>
                    <input type="text" name="precio"><br><br>
                    <small class="text-danger">{{ $errors->first('precio') }}</small>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Fecha vencimiento: </label><br>
                    <input type="date" name="fecha_ven_producto"><br><br>
                    <small class="text-danger">{{ $errors->first('fecha_ven_producto') }}</small>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Estado: </label><br>
                    <input type="text" name="estado_producto"><br><br>
                    <small class="text-danger">{{ $errors->first('estado_producto') }}</small>
                </div>

                <button type="submit" class="btn btn-primary">Registrar</button>


    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style type="text/css">
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
        .btn-file {
            position: relative;
            overflow: hidden;
            width: 100px;
        }

        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }

        .btn-file i {
            font-size: 23px;
        }

        .imagen img {
            max-width: 100%;
            max-height: 50vh;
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
    </script>
@stop

