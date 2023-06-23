<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesional;
use App\Models\mensaje;

class ProfesionalController extends Controller
{
    public function store(Request $request)
    {
        $mensaje = new mensaje;
        $mensaje->id_profesional = $request->input('nombre_profesional');
        $mensaje->nombre = $request->input('nombre');
        $mensaje->mensaje = $request->input('mensaje');
        $mensaje->save();

    }
}

