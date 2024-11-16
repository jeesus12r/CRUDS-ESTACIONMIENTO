<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Productos::paginate(3);
        return view('moduls.dash.home',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('moduls.dash.createproductos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new productos();
        $item -> name = $request -> name;
        $item -> descripcion = $request -> descripcion;
        $item -> precio = $request -> precio;
        $item -> stock = $request -> stock;
        $item -> save();
        return to_route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(productos $productos, string $id)
    {
        $item = productos::find($id);
        return view('moduls.dash.mostrar',compact('item'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(productos $productos,$id)
    {
        $item = productos::find($id);
        return view('moduls.dash.editarProductos',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, productos $productos,string $id)
    {
        $item =  productos::find($id);
        $item -> name = $request -> name;
        $item -> descripcion = $request -> descripcion;
        $item -> precio = $request -> precio;
        $item -> stock = $request -> stock;
        $item -> save();
        return to_route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(productos $productos,string $id)
    {
        $item = productos::find($id);
        $item->delete();
        return to_route('home')->with('success', 'Eliminado');
    }
}
