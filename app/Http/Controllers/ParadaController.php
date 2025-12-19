<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\paradas;

class ParadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paradas = paradas::all();
        return view('paradas.index', compact('paradas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paradas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_parada' => 'required|string|max:255',
            'calle' => 'required|string|max:255',
        ]);
        paradas::create($validated);
        return redirect()->route('paradas.index')->with('success', 'Parada registrada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $parada = paradas::findOrFail($id);
        return view('paradas.show', compact('parada'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $parada = paradas::findOrFail($id);
        return view('paradas.edit', compact('parada'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nombre_parada' => 'required|string|max:255',
            'calle' => 'required|string|max:255',
        ]);
        $parada = paradas::findOrFail($id);
        $parada->update($validated);
        return redirect()->route('paradas.index')->with('success', 'Parada actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $parada = paradas::findOrFail($id);
        $parada->delete();
        return redirect()->route('paradas.index')->with('success', 'Parada eliminada correctamente.');
    }
}
