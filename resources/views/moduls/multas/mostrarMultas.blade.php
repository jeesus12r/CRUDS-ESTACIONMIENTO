@extends('layouts.main')

@section('contenido')
    <div class="container mt-4">
        <h2>Info de las Multas: {{$item->name}}</h2>
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <table  class="table table-success table-striped text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>TIPO</th>
                                <th>FECHA</th>
                                <th>HORA</th>
                                <th>METODO</th>
                                <th>ESTADO</th>
                                <th>EMPLEADO</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> {{$item->id}} </td>
                                <td>{{$item->name}}</td>
                                <td> {{$item->tipo}} </td>
                                <td> {{$item->fecha}} </td>
                                <td> {{$item->hora}} </td>
                                <td> {{$item->metodo}} </td>
                                <td> {{$item->estado}} </td>
                                <td> {{$item->empleado}} </td>
                                
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{route('indexMultas')}} " class="btn btn-secondary mt-5">cancelar</a>
                 </div>
            </div>
        </div>
    </div>
@endsection