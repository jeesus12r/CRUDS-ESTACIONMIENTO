@extends('layouts.main')

@section('contenido')
    <div class="container mt-4">
        <h2>Info del producto: {{$itemm->nombree}}</h2>
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <table  class="table table-success table-striped text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>TIPO DE AFILIACION</th>
                                <th>FECHA DE REGISTRO</th>
                                <th>ESTADO DE LA AFILIACION</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> {{$itemm->id}} </td>
                                <td>{{$itemm->nombree}}</td>
                                <td> {{$itemm->tipo}} </td>
                                <td> {{$itemm->fecha}} </td>
                                <td> {{$itemm ->estado}} </td>
                                
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{route('indexAfiliacion')}} " class="btn btn-secondary mt-5">cancelar</a>
                 </div>
            </div>
        </div>
    </div>
@endsection