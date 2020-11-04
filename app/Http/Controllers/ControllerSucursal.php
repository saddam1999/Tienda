<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class ControllerSucursal extends Controller
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
        $sucursal=  new \App\Models\Sucursal;
        $sucursal->nombre=$request->get('nombre');
        $sucursal->direccion = $request->get('direccion');
        $sucursal->telefono=$request->get('telefono');
        $sucursal->email=$request->get('email');
        $sucursal->telegram=$request->get('telegram');
        $sucursal->whatsapp=$request->get('whatsapp');
        $sucursal->save();
        return back()->with('success', "Sucursal agregada: ".$sucursal->nombre);

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
        $sucursal= \App\Models\Sucursal::find($id);
        $sucursal->nombre=$request->get('nombre1');
        $sucursal->direccion = $request->get('direccion1');
        $sucursal->telefono=$request->get('telefono1');
        $sucursal->email=$request->get('email1');
        $sucursal->telegram=$request->get('telegram1');
        $sucursal->whatsapp=$request->get('whatsapp1');
        $sucursal->save();
        return back()->with('success', "Sucursal editada: ".$sucursal->nombre);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sucursal= \App\Models\Sucursal::find($id);
        if ($sucursal != null) {
            $sucursal->delete();
            return back()->with('success', "Sucursal Borrada: ".$sucursal->nombre);
        } else {
            return back()->with('warning', "Sucursal No Borrada: ".$sucursal->nombre);
        }
    }
}
