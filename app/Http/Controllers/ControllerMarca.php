<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use \App\Models\User;
use App\Models\Articulo;
class ControllerMarca extends Controller
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
    public function marca(Request $request)
    {
        $marca = new \App\Models\Marca();
        $marca->nombre = $request->get('nombre');
        $marca->logo = "--";
        $marca->descripcion = $request->get('descripcion');
        $marca->save();
        $data = $request->session()->all();

        return back()->with('success', "Marca agregada".$marca->nombre);

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
        $marca= \App\Models\Marca::find($id);
        $marca->nombre=$request->get('nombre1');
        $marca->logo = "--";
        $marca->tipo = $request->get('tipo1');
        $marca->descripcion = $request->get('descripcion1');
        $marca->save();

        return back()->with('success', "Marca Editada".$marca->nombre);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marca= \App\Models\Marca::find($id);
        if ($marca != null) {
            $marca->delete();
            return back()->with('success', "Marca Borrada : ".$marca->nombre);
        } else {
            return back()->with('warning', 'Marca no se pudo Borrar : ' . $marca->nombre);
        }
    }
}
