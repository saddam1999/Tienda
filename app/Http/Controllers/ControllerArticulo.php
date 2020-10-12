<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use App\Models\Articulo;

class ControllerArticulo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $articulo = new \App\Models\Articulo();
        $articulo->nombre = $request->get('nombre');
        $articulo->id_marca =  $request->get('id_marca');
        $articulo->existencia = $request->get('existencia');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->precioOriginal = $request->get('precio');
        $temporal = $request->get('descuento');
        $temporal2 = $request->get('precio');

        if ($temporal != 0 || $temporal > 0) {
            $descuento = ($temporal * $temporal2) / 100;
            $articulo->precio  = $temporal2 - $descuento;
            $articulo->descuento = $temporal;
        } else {
            $articulo->descuento = $temporal;
            $articulo->precio = $request->get('precio');
        }
        $articulo->save();
        \Session::flash('nav', 'Articulo');
        return back()->with('nav', "Articulo");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        $articulo = \App\Models\Articulo::find($id);
        $articulo->nombre = $request->get('nombre1');
        $articulo->descripcion = $request->get('descripcion1');
        $articulo->id_marca = $request->get('id_marca1');
        $temporal = $request->get('descuento1');
        $temporal2 = $articulo->precioOriginal;

        // en caso de que modifiquen el precio ya con descuento
        //restablecer el precio original
        //modificar el descuento
        if ($temporal != 0 || $temporal > 0) {
            $descuento = ($temporal * $temporal2) / 100;
            $articulo->precio  = $temporal2 - $descuento;
            $articulo->descuento = $temporal;
            $articulo->precioOriginal = $request->get('precio1');
        } else if ($temporal == 0) { //en caso de que descuento este en 0 restablece precio
            // no modificar nada
            $articulo->descuento = 0;
            $articulo->precio = $articulo->precioOriginal;
        }
        $articulo->existencia = $request->get('existencia1');
        $articulo->save();
        \Session::flash('nav', 'Articulo');
        return back()->with('nav', "Articulo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = \App\Models\Articulo::find($id);
        $articulo->delete();
        \Session::flash('nav', 'Articulo');
        return back()->with('nav', "Articulo");
    }
}
