<?php

namespace App\Http\Controllers;

use App\Models\Multas;
use Illuminate\Http\Request;

class MultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Multas::paginate(3);
        return view('moduls.multas.indexmultas',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('moduls.multas.crearMultas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Multas();
        $item -> name = $request -> name;
        $item -> tipo = $request -> tipo;
        $item -> fecha = $request -> fecha;
        $item -> hora = $request -> hora;
        $item -> metodo = $request -> metodo;
        $item -> estado = $request -> estado;
        $item -> empleado = $request -> empleado;
        $item -> save();
        return to_route('indexMultas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Multas $multas,string $id)
    {
        $item = Multas::find($id);
        return view('moduls.multas.mostrarMultas',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Multas $multas,string $id)
    {
        $item = multas::find($id);
        return view('moduls.multas.editarMultas',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Multas $multas,string $id)
    {
        $item =  Multas::find($id);
        $item -> name = $request -> name;
        $item -> tipo = $request -> tipo;
        $item -> fecha = $request -> fecha;
        $item -> hora = $request -> hora;
        $item -> metodo = $request -> metodo;
        $item -> estado = $request -> estado;
        $item -> empleado = $request -> empleado;
        $item -> save();
        return to_route('indexMultas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Multas $multas,string $id)
    {
        $item = Multas::find($id);
        $item->delete();
        return to_route('indexMultas')->with('success', 'Eliminado');
    }
}
