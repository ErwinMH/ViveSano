<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

/**
 * Class MensajeController
 * @package App\Http\Controllers
 */
class mensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensajes = Mensaje::paginate();

        return view('mensaje.index', compact('mensajes'))
            ->with('i', (request()->input('page', 1) - 1) * $mensajes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mensaje = new Mensaje();
        return view('mensaje.create', compact('mensaje'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mensaje::$rules);

        $mensaje = Mensaje::create($request->all());

        return redirect()->route('mensajes.index')
            ->with('success', 'Mensaje created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensaje = Mensaje::find($id);

        return view('mensaje.show', compact('mensaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mensaje = Mensaje::find($id);

        return view('mensaje.edit', compact('mensaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mensaje $mensaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mensaje $mensaje)
    {
        request()->validate(Mensaje::$rules);

        $mensaje->update($request->all());

        return redirect()->route('mensajes.index')
            ->with('success', 'Mensaje updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mensaje = Mensaje::find($id)->delete();

        return redirect()->route('mensajes.index')
            ->with('success', 'Mensaje deleted successfully');
    }

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
