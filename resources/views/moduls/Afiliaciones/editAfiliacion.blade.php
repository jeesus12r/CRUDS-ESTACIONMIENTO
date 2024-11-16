@extends('layouts/main')

@section('contenido')
    <div class="container">
        <h2>ACTUALIZAR CLIENTES</h2>
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <form action="{{route('updateAfiliacion', $itemm->id)}}" method="POST">
                     @csrf
                     @method('PUT')
                     <label for="nombree">NOMBRE </label>
                     <input type="text" name="nombree" id="nombree" class="form-control" required value="{{$itemm->nombree}} ">

                     <label for="tipo">TIPO DE AFILIACION</label>
                     <input type="text" name="tipo" id="tipo" class="form-control" required value="{{$itemm->tipo}} ">

                     <label for="fecha">FECHA DE REGISTRO</label>
                     <input type="date" name="fecha" id="fecha" class="form-control" required value="{{$itemm->fecha}} ">

                     <label for="estado">ESTADO DE LA AFILIACION</label>
                     <input type="text" name="estado" id="estado" class="form-control" required value="{{$itemm->estado}} ">

                     

                     <button class="btn btn-warning">Actualizar</button>
                     <a href="{{route('indexAfiliacion')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                 </div>
            </div>
        </div>
    </div>
@endsection