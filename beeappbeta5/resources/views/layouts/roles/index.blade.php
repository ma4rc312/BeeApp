@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-lg-right" href="{{route('roles.create')}}">Nuevo rol</a>
    <h1>Lista de roles</h1>
@stop

@section('content')
@if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Role</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>

                            <td width="10px">
                                <a href="{{route('roles.edit', $role)}}" class="btn btn-sm btn-primary">Editar</a>
                            </td>

                            <td width="10px">
                                <form action="{{route('roles.destroy', $role)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop


