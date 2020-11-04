<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\S, torage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use \App\Models\User;
use App\Models\Articulo;

class ControllerArticulo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $articulo = new \App\Models\Articulo();
        $articulo->nombre = $request->get('nombre');
        $articulo->id_marca =  $request->get('id_marca');
        $articulo->existencia = $request->get('existencia');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->categoria = $request->get('categoria');
        $articulo->talla = $request->get('talla');
        $articulo->IDlocal = $request->get('IDlocal');
        $articulo->precioOriginal = $request->get('precio');
        $temporal = $request->get('descuento');
        $temporal2 = $request->get('precio');

        if ($temporal != 0 || $temporal > 0) {
            $descuento = ($temporal * $temporal2) / 100;
            $articulo->precio  = $temporal2 - $descuento;
            $articulo->descuento = $temporal;
        } else {
            $articulo->descuento = $temporal;
            $articulo->precio = $request->get('precio');
        }
        $articulo->imagena=  $request->file('imagena');

        $articulo->imagenb =  $request->imagenb;

        $articulo->imagenc =  $request->imagenc;

        $articulo->imagend = $request->imagend;



        $articulo->save();

        // $request->session()->flash('notificacion', 'Task was successful!');
        $data = $request->session()->all();
        //dd($data);
        return back()->with('success', "Articulo Agregado");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        $articulo = \App\Models\Articulo::find($id);
        $articulo->nombre = $request->get('nombre1');
        $articulo->descripcion = $request->get('descripcion1');
        $articulo->id_marca = $request->get('id_marca1');
        $articulo->categoria = $request->get('categoria1');
        $articulo->talla = $request->get('talla1');
        //$articulo->IDlocal = $request->get('IDlocal1');
        $temporal = $request->get('descuento1');
        $temporal2 = $articulo->precioOriginal;

        // en caso de que modifiquen el precio ya con descuento
        //restablecer el precio original
        //modificar el descuento
        if ($temporal != 0 || $temporal > 0) {
            $descuento = ($temporal * $temporal2) / 100;
            $articulo->precio  = $temporal2 - $descuento;
            $articulo->descuento = $temporal;
            // $articulo->precioOriginal = $request->get('precio1');
        } else if ($temporal == 0) { //en caso de que descuento este en 0 restablece precio
            // no modificar nada
            $articulo->descuento = 0;
            $articulo->precio = $temporal2;
        }
        $articulo->imagena = $request->imagena;

        $articulo->imagenb =  $request->imagenb;

        $articulo->imagenc =  $request->imagenc;

        $articulo->imagend = $request->imagend;



        $articulo->existencia = $request->get('existencia1');
        $articulo->save();
        return back()->with('success', 'Articulo editado : ' . $articulo->nombre);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = \App\Models\Articulo::find($id);
        if ($articulo != null) {
            $articulo->delete();
            return back()->with('success', 'Articulo Borrado : ' . $articulo->nombre);
        } else {
            return back()->with('warning', 'Articulo no se pudo Borrar : ' . $articulo->nombre);
        }
    }
}
