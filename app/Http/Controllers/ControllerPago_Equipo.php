<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPago_Equipo extends Controller
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
        $pago = new \App\Models\Pago_Equipo();
        $pago->id_user=$request->get('id_user4');
        $pago->id_equipo=$request->get('id_equipo4');;
        $pago->id_cliente=$request->get('id_cliente4');
        $pago->id_servicio=$request->get('id_servicio4');;
        $pago->id_sucursal=$request->get('id_sucursal4');;
        $sucursal = \App\Models\Sucursal::find($pago->id_sucursal);
        $pago->id_caja=$sucursal->id_caja;
        $servicio = \App\Models\Servicio::find($pago->id_servicio);
        //$caja = \App\Models\Caja::find($sucursal->id_caja);
        //$pago->id_caja=$equipo->id_caja;
        //$pago->id_corte=$equipo->id_corte;
        if($pago->pago!=''){
        $pago->adelanto=$pago->pago;//adelanto
        $pago->monto=($servicio->precio - $pago->adelanto);
        }else
        {
         $pago->monto=$servicio->precio;
        }
        $pago->comentario=$pago->comentario;
        $pago->fecha=$pago->fecha;
        $pago->save();
        return back()->with('success', "Equipo Pagado");

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
