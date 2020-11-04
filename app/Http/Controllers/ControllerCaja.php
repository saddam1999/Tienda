<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caja;

class ControllerCaja extends Controller
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
        $caja = new \App\Models\Caja();
        $caja->id_user=$request->get('id_user');
        $caja->id_sucursal=$request->get('id_sucursal');
        $caja->corte=$request->get('corte');
        $caja->id_corte=$request->get('id_corte');
        $caja->save();
        return back()->with('success', "Caja Agregada");

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
        $caja = \App\Models\Caja::find($id);
        $caja->id_user=$request->get('id_user1');
        $caja->id_sucursal=$request->get('id_sucursal1');
        $caja->corte=$request->get('corte1');
        $caja->id_corte=$request->get('id_corte1');
        $caja->save();
        return back()->with('success', "Caja Actualizada");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caja = \App\Models\Caja::find($id);
        if ($caja != null) {
            $caja->delete();
            return back()->with('success', 'Caja Borrada : ' . $caja->nombre);
        } else {
            return back()->with('warning', 'Caja no se pudo Borrar : ' . $caja->nombre);
        }
    }
}
