@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-12">
    <div class="card">
        <div class="card border-info">
            <div class="card text-white bg-info">
                <div class="card-header">

                    <h5>Bienvenido <b>{{auth()->user()->name}}</b>, Ya iniciaste sesion ahora puedes realizar compras</h5></div>
      </div> </div></div></div><br><br>

<div class="card">
    <div class="card text-white bg-danger">
        <div class="card-header" aling = "center">
            <h1><b>Nuestros productos</h1></b>
</div>
    </div>
</div>

<div class="card border-danger">
    <div class="card-header justify-content-center">
        <div class="row">
            @foreach ($products as $product )
            <div class="col-md-4 text-md-center">
                <br><img style="width: 170px; height:230px;" src="{{$product->img}}">
                <br><h4>{{$product->nombre}}</h4>
                <h4>Precio: .{{number_format($product->precio,2)}}</h4>
                <h4><b><i>no incluye IGV</i></b></h4>

                
            </div>
                
            @endforeach
        </div>
    </div>
</div>