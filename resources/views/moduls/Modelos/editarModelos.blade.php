@extends('layouts/main')

@section('contenido')
    <div class="container">
        <h2>ACTUALIZAR  MODELOS</h2>
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <form action="{{route('updateModelos', $item->id)}}" method="POST">
                     @csrf
                     @method('PUT')
                     <label for="name">NOMBRE </label>
                     <input type="text" name="name" id="name" class="form-control" required value="{{$item->name}} ">

                     <label for="marca">Marca</label>
                     <input type="text" name="marca" id="marca" class="form-control" required value="{{$item->marca}} ">

                     <label for="fecha">FECHA DE FABRICACION</label>
                     <input type="date" name="fecha" id="fecha" class="form-control" required value="{{$item->fecha}} ">

                     <label for="tipo">TIPO DE VEHICULO</label>
                     <input type="text" name="tipo" id="tipo" class="form-control" required value="{{$item->tipo}} ">


                     <button class="btn btn-warning">Actualizar</button>
                     <a href="{{route('home')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                 </div>
            </div>
        </div>
    </div>
@endsection