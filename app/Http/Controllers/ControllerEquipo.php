<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class ControllerEquipo extends Controller
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
       $equipo = new \App\Models\Equipo();
       $equipo->id_user=$request->get('id_user');
       $equipo->id_cliente=$request->get('id_cliente');
       $equipo->id_servicio=$request->get('id_servicio');
       $equipo->serial=$request->get('serial');
       $equipo->imei=$request->get('imei');
       $equipo->id_captura=$request->get('id_captura');
       $equipo->id_comentario=$request->get('id_comentario');
       $equipo->fecha_recibido=$request->get('fecha_recibido');
       $equipo->fecha_entrega=$request->get('fecha_entrega');
       $equipo->status=$request->get('status');
       $equipo->save();
       return back()->with('success', "Equipo agregado");
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
        $equipo = new \App\Models\Equipo();
        $equipo->id_user=$request->get('id_user1');
        $equipo->id_cliente=$request->get('id_cliente1');
        $equipo->id_servicio=$request->get('id_servicio1');
        $equipo->serial=$request->get('serial1');
        $equipo->imei=$request->get('imei1');
        $equipo->id_captura=$request->get('id_captura1');
        $equipo->id_comentario=$request->get('id_comentario1');
        $equipo->fecha_recibido=$request->get('fecha_recibido1');
        $equipo->fecha_entrega=$request->get('fecha_entrega1');
        $equipo->status=$request->get('status1');
        $equipo->save();
        return back()->with('success', "Equipo Editado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo= \App\Models\Equipo::find($id);
        if ($equipo != null) {
            $equipo->delete();
            return back()->with('success', "Equipo Borrado");
        } else {
            return back()->with('success', 'Equipo no se pudo Borrar : ' . $equipo->nombre);
        }
    }
}
