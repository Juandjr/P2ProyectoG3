<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Notificaciones;

class NotificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notificaciones = Notificaciones::all();
        return view('notificaciones.index', compact('notificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios = \App\Models\User::all();
        return view('notificaciones.create', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'mensaje' => 'required|string',
            'fecha_envio' => 'required|date',
            'leida' => 'nullable|boolean',
            'usuario_id' => 'nullable|integer|exists:users,id',
        ]);
        Notificaciones::create($validated);
        return redirect()->route('notificaciones.index')->with('success', 'Notificación registrada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $notificacion = Notificaciones::findOrFail($id);
        return view('notificaciones.show', compact('notificacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $notificacion = Notificaciones::findOrFail($id);
        return view('notificaciones.edit', compact('notificacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'mensaje' => 'required|string',
            'fecha_envio' => 'required|date',
            'leida' => 'nullable|boolean',
            'usuario_id' => 'nullable|integer|exists:users,id',
        ]);
        $notificacion = Notificaciones::findOrFail($id);
        $notificacion->update($validated);
        return redirect()->route('notificaciones.index')->with('success', 'Notificación actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notificacion = Notificaciones::findOrFail($id);
        $notificacion->delete();
        return redirect()->route('notificaciones.index')->with('success', 'Notificación eliminada correctamente.');
    }
}
