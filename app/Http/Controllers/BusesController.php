<?php

namespace App\Http\Controllers;

use App\Models\Buses;
use Illuminate\Http\Request;

class BusesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Buses::with('paradas')->get());
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
            'matricula' => 'required|string',
            'capacidad' => 'required|integer',
            'kilometraje' => 'required|integer',
            'compania' => 'required|string',
        ]);

        $bus = Buses::create($validated);

        return response()->json($bus, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Buses $buses)
    {
        return response()->json($buses->load('paradas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buses $buses)
    {
        // No aplica para API; se puede implementar vista si es necesario
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buses $buses)
    {
        $validated = $request->validate([
            'matricula' => 'sometimes|required|string',
            'capacidad' => 'sometimes|required|integer',
            'kilometraje' => 'sometimes|required|integer',
            'compania' => 'sometimes|required|string',
        ]);

        $buses->update($validated);

        return response()->json($buses);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buses $buses)
    {
        $buses->delete();

        return response()->json(null, 204);
    }
}
