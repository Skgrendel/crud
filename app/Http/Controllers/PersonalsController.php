<?php

namespace App\Http\Controllers;

use App\Models\departamentos;
use App\Models\personals;
use App\Models\secciones;
use Illuminate\Http\Request;

class PersonalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $personals = personals::where('estado', 1)->get();
        return view('dashboard', compact('personals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $secciones = secciones::pluck('nombre', 'id');
        $departamentos = departamentos::pluck('nombre', 'id');
        return view('personal.create', compact('secciones', 'departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = personals::create([
            'nombre' => $request->input('nombre'),
            'direccion' => $request->input('direccion'),
            'seccion_id' => $request->input('seccion_id'),
            'departamento_id' => $request->input('departamento_id'),
        ]);

        return redirect()->route('personals.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(personals $personals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $personals = personals::find($id);
        $secciones = secciones::pluck('nombre', 'id');
        $departamentos = departamentos::pluck('nombre', 'id');
        return view('personal.edit', compact('personals', 'secciones', 'departamentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $personals = personals::find($id);
        $data = $request->all();
        $personals->update($data);
        return redirect()->route('personals.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $personals = personals::find($id);
        $personals->update([
            'estado' => '0'
        ]);

        return redirect()->route('dashboard');
    }
}
