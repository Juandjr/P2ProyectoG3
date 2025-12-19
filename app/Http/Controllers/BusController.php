<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Buses;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buses = Buses::all();
        return view('buses.index', compact('buses'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buses.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'matricula' => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
            'kilometraje' => 'required|integer|min:0',
            'compania' => 'required|string|max:255',
        ]);
        Buses::create($validated);
        return redirect()->route('buses.index')->with('success', 'Bus registrado correctamente.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bus = Buses::findOrFail($id);
        return view('buses.show', compact('bus'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bus = Buses::findOrFail($id);
        return view('buses.edit', compact('bus'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'matricula' => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
            'kilometraje' => 'required|integer|min:0',
            'compania' => 'required|string|max:255',
        ]);
        $bus = Buses::findOrFail($id);
        $bus->update($validated);
        return redirect()->route('buses.index')->with('success', 'Bus actualizado correctamente.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bus = Buses::findOrFail($id);
        $bus->delete();
        return redirect()->route('buses.index')->with('success', 'Bus eliminado correctamente.');
    }
}
