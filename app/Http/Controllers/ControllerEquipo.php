<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Servicio;

class ControllerEquipo extends Controller
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
       $equipo = new \App\Models\Equipo();
       $equipo->id_user=$request->get('id_user');
       $equipo->id_cliente=$request->get('id_cliente');
       $equipo->id_servicio=$request->get('id_servicio');
       $equipo->id_sucursal=$request->get('id_sucursal');
       $equipo->serial=$request->get('serial');
       $equipo->imei=$request->get('imei');
       $equipo->pago=$request->get('pago');
       $equipo->id_captura=$request->get('id_captura');
       $equipo->id_comentario=$request->get('descripcion');
       $equipo->fecha_recibido=$request->get('fecha_recibido');
       $equipo->fecha_entrega=$request->get('fecha_entrega');
       $equipo->status=$request->get('status');
       $equipo->save();

       $pago = new \App\Models\Pago_Equipo();
       $pago->id_user=$equipo->id_user;
       $pago->id_equipo=$equipo->id;
       $pago->id_cliente=$equipo->id_cliente;
       $pago->id_servicio=$equipo->id_servicio;
       $pago->id_sucursal=$equipo->id_sucursal;

       $sucursal = \App\Models\Sucursal::find($equipo->id_sucursal);
       $pago->id_caja=$sucursal->id_caja;

       $servicio = \App\Models\Servicio::find($equipo->id_servicio);
       //$caja = \App\Models\Caja::find($sucursal->id_caja);
       //$pago->id_caja=$equipo->id_caja;
       //$pago->id_corte=$equipo->id_corte;
       if($equipo->pago!=''){
       $pago->adelanto=$equipo->pago;//adelanto
       $pago->monto=($servicio->precio - $pago->adelanto);
       }else
       {
        $pago->monto=$servicio->precio;
       }

       $pago->comentario=$equipo->comentario;
       $pago->fecha=$equipo->fecha;
       $pago->save();
       return back()->with('success', "Equipo agregado");
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
        $equipo= \App\Models\Equipo::find($id);
        $equipo->id_user=$request->get('id_user2');
        $equipo->id_cliente=$request->get('id_cliente2');
        $equipo->id_servicio=$request->get('id_servicio2');
        $equipo->serial=$request->get('serial2');
        $equipo->imei=$request->get('imei2');
        $equipo->pago=$request->get('pago2');
//        $equipo->id_captura=$request->get('id_captura2');
        $equipo->id_comentario=$request->get('descripcion2');
        $equipo->fecha_recibido=$request->get('fecha_recibido2');
        $equipo->fecha_entrega=$request->get('fecha_entrega2');
        $equipo->status=$request->get('status2');
        $equipo->save();

        $pago= \App\Models\Pago_Equipo::find($equipo->id_pago);
        if($pago!=null){
        $pago->id_user=$equipo->id_user;
        $pago->id_equipo=$equipo->id;
        $pago->id_cliente=$equipo->id_cliente;
        $pago->id_servicio=$equipo->id_servicio;
        $pago->id_sucursal=$equipo->id_sucursal;

        $sucursal = \App\Models\Sucursal::find($equipo->id_sucursal);
        $pago->id_caja=$sucursal->id_caja;

        $servicio = \App\Models\Servicio::find($equipo->id_servicio);
        //$caja = \App\Models\Caja::find($sucursal->id_caja);
        //$pago->id_caja=$equipo->id_caja;
        //$pago->id_corte=$equipo->id_corte;
        if($equipo->pago!=''){
        $pago->adelanto=$equipo->pago;//adelanto
        $pago->monto=($servicio->precio - $pago->adelanto);
        }else
        {
         $pago->monto=$servicio->precio;
        }

        $pago->comentario=$equipo->comentario;
        $pago->fecha=$equipo->fecha;
    }

        return back()->with('success', "Equipo Editado");
    }


        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cambio_servicio(Request $request, $id)
    {
        $equipo= \App\Models\Equipo::find($id);
        $equipo->id_servicio=$request->get('id_servicio5');
        $equipo->save();
        return back()->with('success', "Success Servicio Cambiado");
    }
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $id)
    {
        $equipo= \App\Models\Equipo::find($id);
        if ($equipo != null) {
            $equipo->status=$request->get('status3');
            $equipo->save();
        return back()->with('success', "Status Cambiado");
        }else
        {
            return back()->with('success', 'Status no se pudo Cambiar intente de nuevo : ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo= \App\Models\Equipo::find($id);
        if ($equipo != null) {
            $equipo->delete();
            return back()->with('success', "Equipo Borrado");
        } else {
            return back()->with('success', 'Equipo no se pudo Borrar : ' . $equipo->nombre);
        }
    }
}
