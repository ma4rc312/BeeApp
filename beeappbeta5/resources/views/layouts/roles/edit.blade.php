@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <h1>Editar roles</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            {!! Form::model($role, ['route' => ['roles.update', $role], 'method' => 'put']) !!}

                @include('layouts.roles.partials.form')

                {!! Form::submit('Actualizar  rol', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
    
@section('js')
    <script> console.log('Hi!'); </script>
@stop

