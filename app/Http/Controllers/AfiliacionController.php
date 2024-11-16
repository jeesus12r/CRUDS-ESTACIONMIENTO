<?php

namespace App\Http\Controllers;

use App\Models\Afiliacion;
use Illuminate\Http\Request;

class AfiliacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $itemss = Afiliacion::paginate(3);
        return view('moduls.Afiliaciones.afiliacion',compact('itemss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('moduls.Afiliaciones.createAfiliacion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $itemm = new Afiliacion();
        $itemm -> nombree = $request -> nombree;
        $itemm -> tipo = $request -> tipo;
        $itemm -> fecha = $request -> fecha;
        $itemm -> estado = $request -> estado;
        $itemm -> save();
        return to_route('indexAfiliacion');
    }

    /**
     * Display the specified resource.
     */
    public function show(Afiliacion $afiliacion,string $id)
    {
        $itemm = Afiliacion::find($id);
        return view('moduls.Afiliaciones.mostrarAfiliacion',compact('itemm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Afiliacion $afiliacion,string $id)
    {
        $itemm = Afiliacion::find($id);
        return view('moduls.Afiliaciones.editAfiliacion',compact('itemm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Afiliacion $afiliacion,string $id)
    {
        $itemm =  Afiliacion::find($id);
        $itemm -> nombree = $request -> nombree;
        $itemm -> tipo = $request -> tipo;
        $itemm -> fecha = $request -> fecha;
        $itemm -> estado = $request -> estado;
        $itemm -> save();
        return to_route('indexAfiliacion');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Afiliacion $afiliacion,string $id)
    {
        $itemm = Afiliacion::find($id);
        $itemm->delete();
        return to_route('indexAfiliacion')->with('success', 'Eliminado');
    }
}
