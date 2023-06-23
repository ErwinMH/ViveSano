<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesional;
use App\Models\mensaje;

class mensajeController extends Controller
{
    public function guardarMensaje(Request $request)
    {
        $mensaje = new mensaje();
        $mensaje->nombre_profesional = $request->input('nombre_profesional');
        $mensaje->nombre = $request->input('usuario');
        $mensaje->mensaje = $request->input('mensaje');
        $mensaje->save();
       
        return redirect()->back();

    }
}

