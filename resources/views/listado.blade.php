@extends('Layout.master')
@section('content')
    <h1> listado </h2>
    <h1 class="text-center"> Editorial</h1>
    <br>
    <div class="container ">
        <table class="table ">
            <thead class="table-danger">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Telefono  </th>
                </tr>
            </thead>
            <tbody class="table-warning ">
                @foreach($editoriales as $e)
                <tr>
                <th scope="row">{{$e->id}}</th>
                <td> {{$e->nombre}}</td>
                <td> {{$e->direccion}}</td>
                <td> {{$e->ciudad}}</td>
                <td> {{$e->telefono}}</td>        
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@stop