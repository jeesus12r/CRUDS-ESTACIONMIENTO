<?php

namespace App\Http\Controllers;

use App\Models\Modelos;
use Illuminate\Database\Events\ModelsPruned;
use Illuminate\Http\Request;

class ModelosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Modelos::paginate(3);
        return view('moduls.Modelos.indexModelos',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('moduls.Modelos.crearModelos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Modelos();
        $item -> name = $request -> name;
        $item -> marca = $request -> marca;
        $item -> fecha = $request -> fecha;
        $item -> tipo = $request -> tipo;
        $item -> save();
        return to_route('indexModelos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Modelos $modelos,string $id)
    {
        $item = Modelos::find($id);
        return view('moduls.Modelos.mostrarModelos',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modelos $modelos,string $id)
    {
        $item = Modelos::find($id);
        return view('moduls.Modelos.editarModelos',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modelos $modelos)
    {
        $item = new Modelos();
        $item -> name = $request -> name;
        $item -> marca = $request -> marca;
        $item -> fecha = $request -> fecha;
        $item -> tipo = $request -> tipo;
        $item -> save();
        return to_route('indexModelos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modelos $modelos,string $id)
    {
        $item = Modelos::find($id);
        $item->delete();
        return to_route('indexModelos')->with('success', 'Eliminado');
    }
}
