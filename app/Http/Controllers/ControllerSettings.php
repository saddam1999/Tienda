<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class ControllerSettings extends Controller
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
        $settings=  new \App\Models\Settings;
        $settings->setting_nombre=$request->get('setting_nombre');
        $settings->setting_direccion = $request->get('setting_direccion');
        $settings->setting_logo=$request->get('setting_logo');
        $settings->setting_banner=$request->get('setting_banner');
        $settings->setting_abierto=$request->get('setting_abierto');
        $settings->setting_descripcion=$request->get('setting_descripcion');
        $settings->setting_rfc=$request->get('setting_rfc');
        $settings->setting_contacto=$request->get('setting_contacto');
        $settings->setting_url=$request->get('setting_url');
        $settings->setting_telefono=$request->get('setting_telefono');
        $settings->setting_moneda=$request->get('setting_moneda');
        $settings->save();
        \Session::flash('nav', "settings");
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
        $settings= \App\Models\Settings::find($id);
        $settings->nombre=$request->get('setting_nombre1');
        $settings->direccion = $request->get('setting_direccion1');
        $settings->logo=$request->get('setting_logo1');
        $settings->banner=$request->get('setting_banner1');
        $settings->abierto=$request->get('setting_abierto1');
        $settings->direccion=$request->get('setting_direccion1');
        $settings->rfc=$request->get('setting_rfc1');
        $settings->contacto=$request->get('setting_contacto1');
        $settings->url=$request->get('setting_url1');
        $settings->telefono=$request->get('setting_telefono1');
        $settings->moneda=$request->get('setting_moneda1');
        $settings->save();
        \Session::flash('nav', 'settings');
        return back()->with('nav', "settings");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $settings= \App\Models\Settings::find($id);
        $settings->delete();
        \Session::flash('nav', 'Settings');
        return back()->with('nav', "Settings");
    }
}
