<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use App\Models\Servicio;
use Illuminate\Http\Request;

class TurnoController extends Controller
{
    public function index()
    {
        $turnos = Turno::with('servicios')->orderBy('fecha')->orderBy('hora')->get();
        return view('turnos.index', compact('turnos'));
    }

    public function create()
    {
        $servicios = Servicio::all();
        return view('turnos.create', compact('servicios'));
    }

    public function store(Request $request)
    {
        $datosValidados = $request->validate([
            'nombre_cliente' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'telefono' => 'required|string|max:30',
            'fecha' => 'required|date|after_or_equal:today',
            'hora' => 'required|date_format:H:i',
            'cantidad_personas' => 'required|integer|min:1|max:10',
            'observaciones' => 'nullable|string|max:1000',
            'servicios' => 'required|array|min:1',
            'servicios.*' => 'required|exists:servicios,id',
        ]);

        $serviciosSeleccionados = $datosValidados['servicios'];
        unset($datosValidados['servicios']);

        $turno = Turno::create($datosValidados);
        $turno->servicios()->attach($serviciosSeleccionados);

        return redirect()->route('turnos.index')->with('success', '¡Tu turno fue reservado correctamente!');
    }

    public function destroy(Turno $turno)
    {
        $turno->delete();
        return redirect()->route('turnos.index')->with('success', 'El turno fue cancelado correctamente.');
    }
    
}
