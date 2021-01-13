<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promocion;

class ControllerPromocion extends Controller
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
        $promocion = new \App\Models\Promocion();
        $promocion->titulo = $request->get('titulo');
        $promocion->titulo_banner_principal =  $request->get('titulo_banner_principal');
        $promocion->descripcion_banner_principal = $request->get('descripcion_banner_principal');
        $promocion->descuento_banner_principal = $request->get('descuento_banner_principal');
        $promocion->bannera = $request->get('bannera');
        $promocion->texto_bannera = $request->get('texto_bannera');
        $promocion->bannerb = $request->get('bannerb');
        $promocion->texto_bannerb = $request->get('texto_bannerb');
        $promocion->bannerc = $request->get('bannerc');
        $promocion->texto_bannerc = $request->get('texto_bannerc');
        $promocion->fecha_inicio = $request->get('fecha_inicio');
        $promocion->fecha_final = $request->get('fecha_final');
        $promocion->save();
        return back()->with('success', "Promocion Agregada: ".$promocion->titulo);

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
        $promocion = \App\Models\Promocion::find($id);
        $promocion->titulo = $request->get('titulo');
        $promocion->titulo_banner_principal =  $request->get('titulo_banner_principal');
        $promocion->descripcion_banner_principal = $request->get('descripcion_banner_principal');
        $promocion->descuento_banner_principal = $request->get('descuento_banner_principal');
        $promocion->bannera = $request->get('bannera');
         $promocion->texto_bannera = $request->get('texto_bannera');
        $promocion->bannerb = $request->get('bannerb');
        $promocion->texto_bannerb = $request->get('texto_bannerb');
        $promocion->bannerc = $request->get('bannerc');
        $promocion->texto_bannerc = $request->get('texto_bannerc');
        $promocion->fecha_inicio = $request->get('fecha_inicio');
        $promocion->fecha_final = $request->get('fecha_final');
        $promocion->save();
        return back()->with('success', "Promocion Editada: ".$promocion->titulo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promocion = \App\Models\Promocion::find($id);
        if ($promocion != null) {
            $promocion->delete();
            return back()->with('success', "Promocion Borrada: ".$promocion->titulo);

        } else {
            return back()->with('warning', "No se pudo borrar promocion intentar de nuevo");
        }
    }
}
