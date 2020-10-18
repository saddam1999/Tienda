<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use App\Models\Articulo;

class ControllerUsuario extends Controller
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
        $setting=  new \App\Models\User;
        $setting->name=$request->get('name');
        $setting->email=$request->get('email');
        $contraseñaantigua=$request->get('password');
        $setting->password=bcrypt($contraseñaantigua);
        $setting->rol=$request->get('rol');
        $setting->status=$request->get('status');
        $setting->save();
        return back()->with('success', "Usuario agregado : ".$setting->name);

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
        $admin= \App\Models\User::find($id);
        $admin->name=$request->get('name1');
        $admin->email=$request->get('email1');
        //$contraseñaantigua=$request->get('password1');
       // $admin->password=bcrypt($contraseñaantigua);
        $admin->rol=$request->get('rol1');
        $admin->status=$request->get('estatus1');
        $admin->save();
        return back()->with('success', "Usuario Editado : ".$admin->name);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin= \App\Models\User::find($id);
        if ($admin != null) {
            $admin->delete();
            return back()->with('success', "Usuario Borrado: ".$admin->nombre);
        } else {
            return back()->with('success', "Usuario No Borrado: ".$admin->nombre);
        }
    }
}
