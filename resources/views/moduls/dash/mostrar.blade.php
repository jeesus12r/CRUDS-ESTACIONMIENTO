@extends('layouts.main')

@section('contenido')
    <div class="container mt-4">
        <h2>Info del producto: {{$item->name}}</h2>
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <table  class="table table-success table-striped text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> {{$item->id}} </td>
                                <td>{{$item->name}}</td>
                                <td> {{$item->descripcion}} </td>
                                <td> {{$item->precio}} </td>
                                <td> {{$item->stock}} </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{route('home')}} " class="btn btn-secondary mt-5">cancelar</a>
                 </div>
            </div>
        </div>
    </div>
@endsection