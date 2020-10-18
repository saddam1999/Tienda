<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class ControllerCategoria extends Controller
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
        $categoria = new \App\Models\Categoria();
        $categoria->nombre_categoria = $request->get('nombre_categoria');
        $categoria->save();
        return back()->with('success', "Categoria agregada".$categoria->nombre_categoria);
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
        $categoria = \App\Models\Categoria::find($id);
        $categoria->nombre_categoria = $request->get('nombre_categoria1');
        $categoria->save();
        return back()->with('success','Categoria editada : ' . $categoria->nombre_categoria);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = \App\Models\Categoria::find($id);
        if ($categoria != null) {
            $categoria->delete();
            return back()->with('success', 'Categoria Borrada  : ' . $categoria->nombre_categoria);
        } else {
            return back()->with('success', 'Captura no se pudo Borrar : ' . $categoria->nombre_categoria);
        }
    }
}
