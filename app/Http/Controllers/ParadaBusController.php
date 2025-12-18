<?php

namespace App\Http\Controllers;

use App\Models\ParadaBus;
use Illuminate\Http\Request;

class ParadaBusController extends Controller
{
    public function index()
    {
        return response()->json(ParadaBus::with(['bus', 'parada'])->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'bus_id' => 'required|exists:buses,id',
            'parada_id' => 'required|exists:paradas,id',
            'orden_parada' => 'required|integer',
            'duracion_minutos' => 'required|integer',
        ]);

        $entry = ParadaBus::create($validated);

        return response()->json($entry, 201);
    }

    public function show(ParadaBus $paradaBus)
    {
        return response()->json($paradaBus->load(['bus', 'parada']));
    }

    public function update(Request $request, ParadaBus $paradaBus)
    {
        $validated = $request->validate([
            'bus_id' => 'sometimes|required|exists:buses,id',
            'parada_id' => 'sometimes|required|exists:paradas,id',
            'orden_parada' => 'sometimes|required|integer',
            'duracion_minutos' => 'sometimes|required|integer',
        ]);

        $paradaBus->update($validated);

        return response()->json($paradaBus);
    }

    public function destroy(ParadaBus $paradaBus)
    {
        $paradaBus->delete();

        return response()->json(null, 204);
    }
}
