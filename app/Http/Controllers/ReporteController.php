<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Reportes;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reportes = Reportes::all();
        return view('reportes.index', compact('reportes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buses = \App\Models\Buses::all();
        $conductores = \App\Models\Conductores::all();
        $usuarios = \App\Models\User::all();
        $rutas = \App\Models\Rutas::all();
        return view('reportes.create', compact('buses', 'conductores', 'usuarios', 'rutas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tipo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'bus_id' => 'nullable|integer|exists:buses,id',
            'conductor_id' => 'nullable|integer|exists:conductores,id',
            'usuario_id' => 'nullable|integer|exists:users,id',
            'fecha' => 'required|date',
        ]);
        Reportes::create($validated);
        return redirect()->route('reportes.index')->with('success', 'Reporte registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reporte = Reportes::findOrFail($id);
        return view('reportes.show', compact('reporte'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reporte = Reportes::findOrFail($id);
        return view('reportes.edit', compact('reporte'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'tipo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'bus_id' => 'nullable|integer|exists:buses,id',
            'conductor_id' => 'nullable|integer|exists:conductores,id',
            'usuario_id' => 'nullable|integer|exists:users,id',
            'fecha' => 'required|date',
        ]);
        $reporte = Reportes::findOrFail($id);
        $reporte->update($validated);
        return redirect()->route('reportes.index')->with('success', 'Reporte actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reporte = Reportes::findOrFail($id);
        $reporte->delete();
        return redirect()->route('reportes.index')->with('success', 'Reporte eliminado correctamente.');
    }
}
