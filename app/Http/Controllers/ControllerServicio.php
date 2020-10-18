<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ControllerServicio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio = new \App\Models\Servicio();
        $servicio->nombre = $request->get('nombre');
        $servicio->descripcion = $request->get('descripcion');
        $servicio->precio = $request->get('precio');
        $servicio->tiempo = $request->get('tiempo');
        $servicio->save();
        return back()->with('success', "Servicio agregado: ".$servicio->nombre);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $servicio= \App\Models\Servicio::find($id);
        $servicio->nombre=$request->get('nombre1');
        $servicio->descripcion = $request->get('descripcion1');
        $servicio->precio=$request->get('precio1');
        $servicio->tiempo=$request->get('tiempo1');
        $servicio->save();
        return back()->with('success', "Servicio Editado: ".$servicio->nombre);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio= \App\Models\Servicio::find($id);
        if ($servicio != null) {
            $servicio->delete();
            return back()->with('success', "Servicio Borrado: ".$servicio->nombre);
        } else {
            return back()->with('success', 'Servicio no se pudo Borrar : ' . $servicio->nombre);
        }
    }
}
