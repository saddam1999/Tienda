<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ControllerCaptura extends Controller
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
        $captura = new \App\Models\Captura();
        $captura->id_user=$request->get('id_user1');
        $captura->id_equipo=$request->get('id_equipo1');
        $captura->captura=$request->get('id_captura1');
        $captura->descripcion=$request->get('descripcion1');
        $captura->fecha=$request->get('fecha1');
        $captura->save();
        return back()->with('success','Captura Tomada'.$captura->captura);
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
        $captura = \App\Models\Captura::find($id);
        $captura->id_user=$request->get('id_user');
        $captura->id_equipo=$request->get('id_equipo');
        $captura->captura=$request->get('captura');
        $captura->descripcion=$request->get('descripcion');
        $captura->fecha=$request->get('fecha');
        $captura->save();
        return back()->with('success','Captura Tomada');

    }
        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function galleria(Request $request, $id)
    {
        $captura = \App\Models\Captura::all();
        $usuario = \App\Models\User::all();

        return view('/galleria')->with('id',$id)->with('Captura',$captura)->with('Usuario',$usuario);
        //return back('/galleria')->with('id',$id)->with('Captura',$captura);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $captura = \App\Models\Captura::find($id);
        if ($captura != null) {
            $captura->delete();
            return back()->with('success', 'Captura Borrado : ' . $captura->nombre);
        } else {
            return back()->with('success', 'Captura no se pudo Borrar : ' . $captura->nombre);
        }
    }
}
