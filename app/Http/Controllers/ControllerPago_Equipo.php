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

        $pagocaja = new \App\Models\MovimientoCaja();
        $pagocaja->id_user = $request->get('id_user6');
        // $pagocaja->id_cliente = $request->get('id_cliente6');
        // $pagocaja->id_cliente = $request->get('id_cliente6');
        $pagocaja->id_equipo = $request->get('id_equipo6');
        $pagocaja->id_sucursal = $request->get('id_sucursal6');
        $pagocaja->id_caja = $request->get('id_caja6');
        $pagocaja->id_corte = $request->get('id_corte6');
        $pagocaja->monto = $request->get('monto6');
        $pagocaja->pagado = $request->get('pagado6');
        $pagocaja->adelanto = $request->get('adelanto6');
        $pagocaja->comentario = $request->get('descripcion6');
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

                $suma = $caja->corte - $pagocaja->monto;
                $caja->corte = $suma;
                if ($suma >= 0) {
                    $pagocaja->id_servicio = "Retiro en Caja";
                    $pagocaja->save();
                    $caja->save();
                    return back()->with('success', "Retirado: $" . $pagocaja->monto . " Caja: $" . $caja->corte);
                } else {
                    return back()->with('success', "No puedes retirar: $" . $pagocaja->monto . " Con saldo negativo te faltan: $" . $caja->corte);
                }
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $pago = \App\Models\Pago_Equipo::find($id);
        $totalsiniva = $pago->monto;
        $debiendo = $pago->total;
        $pagado = $request->get('final4');
        $adelanto = $pago->adelanto;
        $iva = $pago->iva;
        $totaldefinitivo = $debiendo - $pagado;
        if ($debiendo == 0) {
            return back()->with('success', "No hay nada que pagar");
        } elseif ($pagado == 0) {
            return back()->with('success', "0 no es un valor aceptado como monto a pagar");
        } elseif ($totaldefinitivo == 0) {
            $pago->total = $pagado;
            $pago->status = 1;
            $pago->save();
            return back()->with('success', "Equipo: #", $id . "Monto Total: " . $debiendo . "Pagado: " . $pagado);
        } elseif($totaldefinitivo != 0) {
            return back()->with('success', "Cambio : ".$totaldefinitivo);
        }

        // dd($totalconivayadelanto);
        //$pago->id_user = $request->get('id_user4');
        //$pago->id_equipo = $request->get('id_equipo4');;
        //$pago->id_cliente = $request->get('id_cliente4');
        //$pago->id_servicio = $request->get('id_servicio4');
        //$pago->id_sucursal = $request->get('id_sucursal4');
        //$pago->id_equipo = $request->get('id_equipo4');
        //$pago->id_caja = $request->get('id_caja4');
        //$pago->id_corte = $request->get('id_corte4');

        //  $pago->monto = $request->get('monto44'); // esto es lo que deberia de pagar total
        //  $pago->pagado = $request->get('final44'); // esto es lo que envia
        // $pago->adelanto = $request->get('adelanto44'); // esto es lo que adelanto

        //  if($pago->monto)
        //$pago->total = $request->get('total');
        //$pago->comentario = $request->get('comentario4');
        //  $pago->status = 1;
        // $pago->fecha = $request->get('fecha4');
        // $pago->save();
        //$input = $request->all();


        //dd($input);

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
