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
            return back()->with('warning', "Caja no encontrada favor de entrar en la seccion sucursal y seleciona una caja para tu cuenta de usuario.");
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
                    return back()->with('warning', "No puedes retirar: $" . abs($pagocaja->monto) . " Con saldo negativo te faltan: $" . abs($caja->corte));
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
        //dd($id);
        $equipo = \App\Models\Equipo::find($id); //id 10
        $busquedapago = \App\Models\Pago_Equipo::all();
        //$pago = \App\Models\Pago_Equipo::find($id); // 9 null
        //ID es id de equipo entonces buscamos el id del pago con id_equipo dentro de pago_equipo
        foreach ($busquedapago as $pago) {
            if ($pago->id_equipo == $id) {
                //dd($equipo->id_sucursal);
                //$user = \App\Models\User::all();
                //$setting = \App\Models\Settings::find(1);
                //$cajaT = \App\Models\Caja::all();
                // dd("Caja: ".$caja->id."Sucursal: ".$sucursal->id);
                $sucursal = \App\Models\Sucursal::find($equipo->id_sucursal);
                $caja = \App\Models\Caja::find($sucursal->id);
                $setting=\App\Models\Settings::all();

                $totalsiniva = $pago->monto; //monto completo sin iva
                if ($pago->iva != null && $pago->iva!='') {
                    $pago->iva= $setting->settings_iva;
                    $calculaiva = ($totalsiniva * $pago->iva) / 100;
                    $debiendo = $totalsiniva + $calculaiva; //lo que se debe en total
                    $iva = $pago->iva;
                }
                else{
                    $debiendo=$totalsiniva;                    
                }
                $pago->pagado=$debiendo;//total con todo e iva
                $pagado = $request->get('final4'); //lo que acaba de mandar 1060
                $adelanto = $pago->adelanto; //lo que dio de adelanto 100
                $pendiente = $debiendo - $adelanto; //1060
                 //
                $totaldefinitivo = $pendiente - $pagado; //1060-1060=0
                //dd($pago->iva);
                //dd( $pago->adelanto."pagado".$totaldefinitivo);
                //dd($pago->total = $pago->monto);
                //dd("ID PAGO: ".$pago->id."ID Equipo".$equipo->id, "Total: ". $pago->total." pagado: ".$pagado." debiendo: ".$debiendo." Resta :".$totaldefinitivo );
                if ($debiendo == 0 || $debiendo == null) {
                    return back()->with('warning', "No hay nada que pagar");
                } elseif ($pagado == 0 || $pagado == null) {
                    return back()->with('warning', "0 no es un valor aceptado como monto a pagar");
                } elseif ($totaldefinitivo == 0) {
                    $pago->total = $pago->monto;
                    $pago->status = 1;
                    $equipo->status = 4;
                    $cajaTemp = $pago->total + $caja->corte;
                    $caja->corte = $cajaTemp;
                    $caja->save();
                    $equipo->save();
                    $pago->save();
                    return back()->with('success', "Equipo: #" . $pago->id . " Pagado " . " Monto Total: " . $pagado);
                } elseif ($pagado >= $pendiente) {
                    $pago->total = $pendiente;
                    $pago->status = 1;
                    $equipo->status = 4;
                    $cajaTemp = $pago->total + $caja->corte;
                    $caja->corte = $cajaTemp;
                    $caja->save();
                    $equipo->save();
                    $pago->save();
                    return back()->with('success', "Cambio : $" . abs($totaldefinitivo) . " Equipo Pagado");
                } elseif ($pagado <= $pendiente) {
                    return back()->with('warning', "No se pudo completar pago faltan : $" . abs($totaldefinitivo));
                }
                // https://api.whatsapp.com/send/?phone=525545507506&text&app_absent=0

                //hay un problema entre cambio y debiendo.. ambos son numeros negativos cuando llegan ala condicioon  $totaldefinitivo <= $pagado marca error
            }
        }
    }

    /**
     * UpdateCajaManual a newly created resource in storage.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function UpdateCajaManual(Request $request)
    {
        $busquedapago = \App\Models\Pago_Equipo::all();
        //$pago = \App\Models\Pago_Equipo::find($id); // 9 null
        //ID es id de equipo entonces buscamos el id del pago con id_equipo dentro de pago_equipo
        $caja = \App\Models\Caja::find(1);
        $caja->corte = 0;

        $caja->save();
        return back()->with('success', "Caja actualizada: $0");

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
