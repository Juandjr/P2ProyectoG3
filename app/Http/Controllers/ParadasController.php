<?php

namespace App\Http\Controllers;

use App\Models\paradas;
use Illuminate\Http\Request;

class ParadasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(paradas::with('buses')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // No aplica para API; se puede implementar vista si es necesario
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_parada' => 'required|string',
            'calle' => 'required|string',
        ]);

        $parada = paradas::create($validated);

        return response()->json($parada, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(paradas $paradas)
    {
        return response()->json($paradas->load('buses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(paradas $paradas)
    {
        // No aplica para API; se puede implementar vista si es necesario
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, paradas $paradas)
    {
        $validated = $request->validate([
            'nombre_parada' => 'sometimes|required|string',
            'calle' => 'sometimes|required|string',
        ]);

        $paradas->update($validated);

        return response()->json($paradas);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(paradas $paradas)
    {
        $paradas->delete();

        return response()->json(null, 204);
    }
}
