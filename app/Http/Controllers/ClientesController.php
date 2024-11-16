<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Clientes::paginate(3);
        return view('moduls.clientes.indexClientes',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('moduls.clientes.createClientes');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Clientes();
        $item -> name = $request -> name;
        $item -> email = $request -> email;
        $item -> direccion = $request -> direccion;
        $item -> telefono = $request -> telefono;
        $item -> fecha = $request -> fecha;
        $item -> save();
        return to_route('indexClientes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clientes $clientes,string $id)
    {
        $item = Clientes::find($id);
        return view('moduls.clientes.mostrarClientes',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clientes $clientes,string $id)
    {
        $item = Clientes::find($id);
        return view('moduls.clientes.editarClientes', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clientes $clientes)
    {
        $item = new Clientes();
        $item -> name = $request -> name;
        $item -> email = $request -> email;
        $item -> direccion = $request -> direccion;
        $item -> telefono = $request -> telefono;
        $item -> fecha = $request -> fecha;
        $item -> save();
        return to_route('indexClientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clientes $clientes,string $id)
    {
        $item = Clientes::find($id);
        $item->delete();
        return to_route('indexClientes')->with('success', 'Eliminado');
    }
}
