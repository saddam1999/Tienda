<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProveedor extends Controller
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
        $setting=  new \App\Models\Proveedor();
        $setting->nombre=$request->get('nombre');
        $setting->direccion=$request->get('direccion');
        $setting->telefono=$request->get('telefono');
        $setting->email=$request->get('email');
        $setting->telegram=$request->get('telegram');
        $setting->whatsapp=$request->get('whatsapp');
        $setting->credito=$request->get('credito');
        $setting->saldo=$request->get('saldo');
        $setting->RFC=$request->get('RFC');
        $setting->status=$request->get('status');
        $setting->save();
        return back()->with('success', "Proveedor agregado : ".$setting->nombre);
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
        $setting= \App\Models\Proveedor::find($id);
        $setting->nombre=$request->get('nombre');
        $setting->direccion=$request->get('direccion');
        $setting->telefono=$request->get('telefono');
        $setting->email=$request->get('email');
        $setting->telegram=$request->get('telegram');
        $setting->whatsapp=$request->get('whatsapp');
        $setting->credito=$request->get('credito');
        $setting->saldo=$request->get('saldo');
        $setting->RFC=$request->get('RFC');
        $setting->status=$request->get('status');
        $setting->save();
        return back()->with('success', "Proveedor Editado : ".$setting->name);
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin= \App\Models\Proveedor::find($id);
        if ($admin != null) {
            $admin->delete(); 
            return back()->with('success', "Usuario Borrado: ".$admin->nombre);
        } else {
            return back()->with('success', "Usuario No Borrado: ".$admin->nombre);
        }
    }
}
