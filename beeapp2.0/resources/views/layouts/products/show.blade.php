@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nombre:{{''.$producer->nombre_producero}}</h1>
    <p>Fecha:{{''.$producer->fecha_producero}}</p>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($producers as $producer)
                        <tr>
                            <td>{{ $producer->razon_social }}</td>
                            <td>{{ $producer->email_prod }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="ml-4 mb-4 col-md-4">
                <a href="{{ route('layouts.products.index') }}" class="btn btn-secondary eliminar">Volver</a>

            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
