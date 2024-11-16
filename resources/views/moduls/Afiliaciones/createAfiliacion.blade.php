@extends('layouts/main')

@section('contenido')
    <h2>CRUD Afiliaciones</h2>
     
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <form action="{{route('storeAfiliacion')}}" method="POST">
                     @csrf
                     @method('POST')
                     <label for="nombree">NOMBRE</label>
                     <input type="text" name="nombree" id="nombree" class="form-control">

                     <label for="tipo">TIPO DE AFILIACION</label>
                     <input type="text" name="tipo" id="tipo" class="form-control">

                     <label for="fecha">FECHA DE REGISTRO</label>
                     <input type="date" name="fecha" id="fecha" class="form-control" id="fecha" name="fecha">

                     <label for="estado">ESTADO DE LA AFILIACION</label>
                     <input type="text" name="estado" id="estado" class="form-control">

                    

                     <button class="btn btn-primary">Agregar
                        
                     </button>
                    <a href="{{route('indexAfiliacion')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                 </div>
            </div>
        </div>
    </div>
@endsection
