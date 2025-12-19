<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Viajes;

class ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viajes = Viajes::all();
        return view('viajes.index', compact('viajes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buses = \App\Models\Buses::all();
        $conductores = \App\Models\Conductores::all();
        $rutas = \App\Models\Rutas::all();
        return view('viajes.create', compact('buses', 'conductores', 'rutas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'bus_id' => 'required|integer|exists:buses,id',
            'conductor_id' => 'required|integer|exists:conductores,id',
            'ruta_id' => 'required|integer|exists:rutas,id',
            'hora_salida' => 'required|date',
            'hora_llegada' => 'nullable|date',
            'distancia_recorrida' => 'nullable|integer',
            'calificacion' => 'nullable|integer|min:1|max:5',
        ]);
        Viajes::create($validated);
        return redirect()->route('viajes.index')->with('success', 'Viaje registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $viaje = Viajes::findOrFail($id);
        return view('viajes.show', compact('viaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $viaje = Viajes::findOrFail($id);
        return view('viajes.edit', compact('viaje'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'bus_id' => 'required|integer|exists:buses,id',
            'conductor_id' => 'required|integer|exists:conductores,id',
            'ruta_id' => 'required|integer|exists:rutas,id',
            'hora_salida' => 'required|date',
            'hora_llegada' => 'nullable|date',
            'distancia_recorrida' => 'nullable|integer',
            'calificacion' => 'nullable|integer|min:1|max:5',
        ]);
        $viaje = Viajes::findOrFail($id);
        $viaje->update($validated);
        return redirect()->route('viajes.index')->with('success', 'Viaje actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $viaje = Viajes::findOrFail($id);
        $viaje->delete();
        return redirect()->route('viajes.index')->with('success', 'Viaje eliminado correctamente.');
    }
}
