<?php

namespace App\Http\Controllers;

use App\Models\Servicio;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('paginas.inicio');
    }
    public function servicios()
    {
        $servicios = Servicio::all();
        return view('paginas.servicios', compact('servicios'));
    }

    public function contacto()
    {
        return view('paginas.contacto');
    }
}
