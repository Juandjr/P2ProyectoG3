<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Rutas;

class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rutas = Rutas::all();
        return view('rutas.index', compact('rutas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rutas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'distancia_total' => 'required|integer|min:0',
            'tiempo_estimado' => 'required|integer|min:0',
        ]);
        Rutas::create($validated);
        return redirect()->route('rutas.index')->with('success', 'Ruta registrada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ruta = Rutas::findOrFail($id);
        return view('rutas.show', compact('ruta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ruta = Rutas::findOrFail($id);
        return view('rutas.edit', compact('ruta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'distancia_total' => 'required|integer|min:0',
            'tiempo_estimado' => 'required|integer|min:0',
        ]);
        $ruta = Rutas::findOrFail($id);
        $ruta->update($validated);
        return redirect()->route('rutas.index')->with('success', 'Ruta actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ruta = Rutas::findOrFail($id);
        $ruta->delete();
        return redirect()->route('rutas.index')->with('success', 'Ruta eliminada correctamente.');
    }
}
