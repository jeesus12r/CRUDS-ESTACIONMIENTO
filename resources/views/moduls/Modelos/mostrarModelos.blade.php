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
                                <th>NOMBRE</th>
                                <th>MARCA</th>
                                <th>FECHA</th>
                                <th>TIPO</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> {{$item->id}} </td>
                                <td>{{$item->name}}</td>
                                <td> {{$item->marca}} </td>
                                <td> {{$item->fecha}} </td>
                                <td> {{$item->tipo}} </td>
                                
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{route('indexModelos')}} " class="btn btn-secondary mt-5">cancelar</a>
                 </div>
            </div>
        </div>
    </div>
@endsection