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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function caja(Request $request)
    {

        $pagocaja = new \App\Models\Pago_Equipo();
        $pagocaja->id_user = $request->get('id_user6');
        $pagocaja->id_cliente = $request->get('id_cliente6');
        $pagocaja->id_cliente = $request->get('id_cliente6');
        $pagocaja->id_equipo = $request->get('id_equipo6');
        $pagocaja->id_sucursal = $request->get('id_sucursal6');
        $pagocaja->id_caja = $request->get('id_caja6');
        $pagocaja->id_corte = $request->get('id_corte6');
        $pagocaja->monto = $request->get('monto6');
        $pagocaja->pagado = $request->get('pagado6');
        $pagocaja->adelanto = $request->get('adelanto6');
        $pagocaja->comentario = $request->get('comentario6');
        $pagocaja->status = $request->get('status6');

        $caja = \App\Models\Caja::find($pagocaja->id_caja);
        //if($caja->id_sucursal!=$pagocaja->id_sucursal){

        if ($caja == null) {
            return back()->with('success', "Caja no encontrada favor de entrar en la seccion sucursal y seleciona una caja para tu cuenta de usuario.");
        } else {
            if ($pagocaja->status == 'deposito' && $pagocaja->monto >= 0) {
                $pagocaja->id_servicio = "Deposito en Caja";
                $suma = $caja->corte + $pagocaja->monto;
                $caja->corte = $suma;
                $pagocaja->save();
                $caja->save();
                return back()->with('success', "Depositado: $" . $pagocaja->monto . " Caja: $" . $caja->corte);
            } else {
                $pagocaja->id_servicio = "Retiro en Caja";
                $suma = $caja->corte - $pagocaja->monto;
                $caja->corte = $suma;
                $pagocaja->save();
                $caja->save();

                return back()->with('success', "Retirado: $" . $pagocaja->monto . " Caja: $" . $caja->corte);
            }
        }
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
        $pago->id_user = $request->get('id_user4');
        $pago->id_equipo = $request->get('id_equipo4');;
        $pago->id_cliente = $request->get('id_cliente4');
        $pago->id_servicio = $request->get('id_servicio4');;
        $pago->id_sucursal = $request->get('id_sucursal4');;
        $sucursal = \App\Models\Sucursal::find($pago->id_sucursal);
        if ($sucursal == null) {
            return back()->with('success', "sucursal no encontrada favor de entrar en la seccion sucursal y seleciona una sucursal para tu cuenta de usuario.");
        }

        $pago->id_caja = $sucursal->id_caja;
        $servicio = \App\Models\Servicio::find($pago->id_servicio);
        if ($servicio == null) {
            return back()->with('success', "servicio no encontrada favor de entrar en la seccion servicio y seleciona una servicio para tu cuenta de usuario.");
        }
        //$caja = \App\Models\Caja::find($sucursal->id_caja);
        //$pago->id_caja=$equipo->id_caja;
        //$pago->id_corte=$equipo->id_corte;
        if ($pago->pago != '') {
            $pago->adelanto = $pago->pago; //adelanto
            $pago->monto = ($servicio->precio - $pago->adelanto);
        } else {
            $pago->monto = $servicio->precio;
        }
        $pago->comentario = $pago->comentario;
        $pago->fecha = $pago->fecha;
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
