<?php

namespace App\Http\Controllers;

use App\Models\Reginformacion;
use Illuminate\Http\Request;

/**
 * Class ReginformacionController
 * @package App\Http\Controllers
 */
class ReginformacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reginformacions = Reginformacion::paginate();

        return view('reginformacion.index', compact('reginformacions'))
            ->with('i', (request()->input('page', 1) - 1) * $reginformacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reginformacion = new Reginformacion();
        return view('reginformacion.create', compact('reginformacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Reginformacion::$rules);

        $reginformacion = Reginformacion::create($request->all());

        return redirect()->route('reginformacions.index')
            ->with('success', 'Reginformacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reginformacion = Reginformacion::find($id);

        return view('reginformacion.show', compact('reginformacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reginformacion = Reginformacion::find($id);

        return view('reginformacion.edit', compact('reginformacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Reginformacion $reginformacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reginformacion $reginformacion)
    {
        request()->validate(Reginformacion::$rules);

        $reginformacion->update($request->all());

        return redirect()->route('reginformacions.index')
            ->with('success', 'Reginformacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $reginformacion = Reginformacion::find($id)->delete();

        return redirect()->route('reginformacions.index')
            ->with('success', 'Reginformacion deleted successfully');
    }
}
