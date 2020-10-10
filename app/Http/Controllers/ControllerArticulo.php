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

        $temporal = $request->get('descuento');
        $temporal2 = $request->get('precio');

        if ($temporal != 0 || $temporal > 0) {
            $descuento = ($temporal * $temporal2)/100;
            $articulo->precio  = $temporal2 - $descuento;
            $articulo->descuento = $temporal;
        } else {
            $articulo->descuento = $temporal;
            $articulo->precio = $request->get('precio');
        }
        $articulo->save();
        return back();
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
        $articulo= \App\Models\Articulo::find($id);
        $articulo->nombre=$request->get('nombre1');
        $articulo->descripcion=$request->get('descripcion1');
        $articulo->precio=$request->get('precio1');
        $articulo->descuento=$request->get('descuento1');
        $articulo->existencia=$request->get('existencia1');
        $articulo->calificacion=$request->get('calificacion1');
        $articulo->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo= \App\Models\Articulo::find($id);
        $articulo->delete();
        return back();
    }
}
