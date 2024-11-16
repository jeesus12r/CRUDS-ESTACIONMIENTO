@extends('layouts/main')

@section('contenido')
    <h2>CRUD CREACION DE MULTAS</h2>
     
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <form action="{{route('storeMultas')}}" method="POST">
                     @csrf
                     @method('POST')
                     <label for="name">NOMBRE</label>
                     <input type="text" name="name" id="name" class="form-control">

                     <label for="tipo">TIPO DE PAGO</label>
                     <input type="text" name="tipo" id="tipo" class="form-control">

                     <label for="fecha">FECHA DE PAGO</label>
                     <input type="date" name="fecha" id="fecha" class="form-control" id="fecha" name="fecha">

                     <label for="hora">HORA DEL PAGO </label>
                     <input type="text" name="hora" id="hora" class="form-control">

                     <label for="metodo">METODO DEL PAGO  </label>
                     <input type="text" name="metodo" id="metodo" class="form-control">

                     <label for="estado">ESTADO DEL PAGO</label>
                     <input type="text" name="estado" id="estado" class="form-control">
                     

                     <label for="empleado">EMPLEADO QUE LO REALIZA</label>
                     <input type="text" name="empleado" id="empleado" class="form-control">


                     <button class="btn btn-primary">Agregar
                        
                     </button>
                    <a href="{{route('indexMultas')}}" class="btn btn-secondary">Cancelar</a>
                    </form>
                 </div>
            </div>
        </div>
    </div>
@endsection
