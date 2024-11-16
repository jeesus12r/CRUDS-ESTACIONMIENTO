@extends('layouts/main')

@section('contenido')
    <div class="container">
        <h2>ACTUALIZAR  MULTAS</h2>
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <form action="{{route('updateMultas', $item->id)}}" method="POST">
                     @csrf
                     @method('PUT')
                     <label for="name">NOMBRE</label>
                     <input type="text" name="name" id="name" class="form-control" required value="{{$item->name}} ">

                     <label for="tipo">TIPO DE PAGO</label>
                     <input type="text" name="tipo" id="tipo" class="form-control" required value="{{$item->tipo}} ">

                     <label for="fecha">FECHA DE PAGO</label>
                     <input type="date" name="fecha" id="fecha" class="form-control" required value="{{$item->fecha}} ">

                     <label for="hora">HORA DEL PAGO</label>
                     <input type="text" name="hora" id="hora" class="form-control" required value="{{$item->hora}} ">

                     <label for="metodo">METODO DEL PAGO</label>
                     <input type="text" name="metodo" id="metodo" class="form-control" required value="{{$item->metodo}} ">

                    
                     <label for="estado">ESTODO DEL PAGO </label>
                     <input type="text" name="estado" id="estado" class="form-control" required value="{{$item->estado}} ">

                     <label for="empleado">NOMBRE DEL EMPLEADO QUE ATENDIO </label>
                     <input type="text" name="empleado" id="empleado" class="form-control" required value="{{$item->empleado}} ">

                     
                     <button class="btn btn-warning">Actualizar</button>
                     <a href="{{route('indexMultas')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                 </div>
            </div>
        </div>
    </div>
@endsection