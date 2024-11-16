@extends('layouts.main')

@section('contenido')
<div class="container text-center mt-5">
    <h2>Login</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('logearse') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                           
                        </div>
                        <button type="submit" class="btn btn-primary  mt-3">Login</button>
                        <a href="{{ route('registro') }}" class="btn btn-primary mt-3">Regístrar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
