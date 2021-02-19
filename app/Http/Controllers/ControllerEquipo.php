<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Servicio;
use Illuminate\Support\Facades\Notification;
use App\Message;
use App\Events\NewMessageNotification;
use App\Mail\MailSender;
use App\Mail\notificacionEmail;
use Illuminate\Support\Facades\Mail;

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
        $token = $request->session()->token();

        $token = csrf_token();
        $chars = '0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz';
        $charsLength = (strlen($chars) - 1);
        $r = null;

        for ($i = 1; $i <= 8; $i++) {
            $rand = rand(0, $charsLength);
            $r .= $chars[$rand];
        }

        $equipo = new \App\Models\Equipo();
        $equipo->id_user = $request->get('id_user');
        $equipo->id_cliente = $request->get('id_cliente');
        $equipo->id_servicio =  $request->get('id_servicio'); //marca
        $equipo->email = $request->get('email_contacto');
        $equipo->telefono = $request->get('telefono_contacto');
        $equipo->presupuesto = $request->get('presupuesto');
        $equipo->pago = $request->get('pago');
        $equipo->uniqueid = $r;
        $equipo->modelo = $request->get('modelo');
        $equipo->id_sucursal = $request->get('id_sucursal');
        $equipo->serial = $request->get('serial');
        $equipo->imei = $request->get('imei');
        $equipo->id_captura = $request->get('id_captura');
        $equipo->id_comentario = $request->get('descripcion');
        $equipo->fecha_recibido = $request->get('fecha_recibido');
        $equipo->fecha_entrega = $request->get('fecha_entrega');
        $equipo->status = $request->get('status');
        $equipo->Tiene_Camara = $request->get('Tiene_Camara');
        $equipo->Centro_Carga = $request->get('Centro_Carga');
        $equipo->Señal = $request->get('Señal');
        $equipo->LectorSD = $request->get('LectorSD');
        $equipo->AltaVoz = $request->get('AltaVoz');
        $equipo->BotonHome = $request->get('BotonHome');
        $equipo->Microfono = $request->get('Microfono');
        $equipo->Lector_SIM = $request->get('Lector_SIM');
        $equipo->Volumenplus = $request->get('Volumenplus');
        $equipo->Volumenless = $request->get('Volumenless');
        $equipo->Encendido = $request->get('Encendido');
        $equipo->Auricular = $request->get('Auricular');
        $equipo->Touch = $request->get('Touch');
        $equipo->Bateria = $request->get('Bateria');
        $equipo->Enciende = $request->get('Enciende');
        $equipo->Memoria = $request->get('Memoria');
        $equipo->SIM = $request->get('SIM');
        $equipo->Golpes = $request->get('Golpes');
        $equipo->Tiene_Bateria = $request->get('Tiene_Bateria');
        $equipo->save();

        $user = \App\Models\User::all();
        //$usuario = \App\Models\User::find(1);

        $setting = \App\Models\Settings::find(1);
        $pago = new \App\Models\Pago_Equipo();
        //$cajaT = \App\Models\Caja::all();
        $sucursal = \App\Models\Sucursal::find($equipo->id_sucursal);
        $caja = \App\Models\Caja::find($sucursal->id);
        $pago->id_user = $equipo->id_user;
        $pago->id_equipo = $equipo->id;

        $pago->iva = $setting->setting_iva;
        $pago->id_cliente = $equipo->id_cliente;
        $pago->id_servicio = null;
        $pago->id_sucursal = $equipo->id_sucursal;
        $pago->id_caja = $caja->id;
        $pago->id_corte = $equipo->created_at; //
        $pago->monto = $equipo->presupuesto; // esto es lo que deberia de pagar total
        $pago->adelanto = $equipo->pago; // esto es lo que adelanto
        if ($pago->adelanto == 0 && $pago->iva == '' && $pago->monto == 0) {
            $pago->total = 0;
        } else if ($pago->adelanto != 0 && $pago->iva != '' && $pago->monto != 0) {

            // $temporal = $pago->monto - $pago->adelanto; se quito aqui quite primero el adelanto y luego aplique el iva WRONG
            //1000 - 100=900
            $iva = ($pago->monto * $pago->iva) / 100;
            // dd($iva);
            //900*16=144
            $pago->pagado = $pago->monto + $iva;
            $total = ($pago->monto + $iva) - $pago->adelanto; //aqui calculo el total mas el iva y luego remuevo el adelanto es lo que falta a pagar
            $pago->total = $total;
            $cajaTemp = $pago->adelanto + $caja->corte;
            $caja->corte = $cajaTemp;
        } else if ($pago->adelanto != 0 && $pago->iva == '' && $pago->monto != 0) {
            $pago->pagado = $pago->monto;
            $temporal = $pago->monto - $pago->adelanto;
            $total = $temporal;
            $pago->total = $total;
            $cajaTemp = $pago->adelanto + $caja->corte;
            $caja->corte = $cajaTemp;
        } else if ($pago->adelanto == 0 && $pago->iva != '' && $pago->monto != 0) {

            //1000 - 100=900
            $iva = ($pago->monto * $pago->iva) / 100;
            //900*16=144
            $pago->pagado = $pago->monto + $iva;
            $total = $pago->monto + $iva;
            $pago->total = $total;
            $cajaTemp = $pago->adelanto + $caja->corte;
            $caja->corte = $cajaTemp;
        } else if ($pago->adelanto != 0 && $pago->iva != '' && $pago->monto == 0) {

            $pago->total = 0;
            $cajaTemp = $pago->adelanto + $caja->corte;
            $caja->corte = $cajaTemp;
        } else {
            $pago->total = 0;
            $cajaTemp = $pago->adelanto + $caja->corte;
            $caja->corte = $cajaTemp;
        }

        $pago->comentario = $request->get('comentario4');
        $pago->status = 0;
        $pago->fecha =  $equipo->created_at;
        $pago->save();
        $caja->save();
        if ($equipo->email != '') {
            Mail::to($request->user())->cc($equipo->email)->send(new notificacionEmail($equipo, $setting));
        }

        return back()->with('success', '<a target="_blank" href="/imprimir/id=' . $equipo->id . '&csrf=' . $token . '">Ticket Generado con exito <br> Imprime Esta Orden dando Click aqui</a>');
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
        $token = $request->session()->token();

        $token = csrf_token();
        $equipo = \App\Models\Equipo::find($id);
        $equipo->id_user = $request->get('id_user2');
        $equipo->id_cliente = $request->get('id_cliente2');
        $equipo->id_servicio = $request->get('id_servicio2');
        $equipo->modelo = $request->get('modelo2');
        $equipo->serial = $request->get('serial2');
        $equipo->imei = $request->get('imei2');
        $equipo->pago = $request->get('pago2');
        $equipo->email = $request->get('email_contacto1');
        $equipo->telefono = $request->get('email_telefono1');
        $equipo->inversion = $request->get('inversion2');
        $equipo->presupuesto = $request->get('presupuesto2');
        //$equipo->id_captura=$request->get('id_captura2');
        $equipo->id_comentario = $request->get('descripcion2');
        $equipo->fecha_recibido = $request->get('fecha_recibido2');
        $equipo->fecha_entrega = $request->get('fecha_entrega2');
        $equipo->status = $request->get('status2');
        $equipo->Tiene_Camara = $request->get('Tiene_Camara2');
        $equipo->Centro_Carga = $request->get('Centro_Carga2');
        $equipo->Señal = $request->get('Señal2');
        $equipo->LectorSD = $request->get('LectorSD2');
        $equipo->AltaVoz = $request->get('AltaVoz2');
        $equipo->BotonHome = $request->get('BotonHome2');
        $equipo->Microfono = $request->get('Microfono2');
        $equipo->Lector_SIM = $request->get('Lector_SIM2');
        $equipo->Volumenplus = $request->get('Volumenplus2');
        $equipo->Volumenless = $request->get('Volumenless2');
        $equipo->Encendido = $request->get('Encendido2');
        $equipo->Auricular = $request->get('Auricular2');
        $equipo->Touch = $request->get('Touch2');
        $equipo->Bateria = $request->get('Bateria2');
        $equipo->Enciende = $request->get('Enciende2');
        $equipo->Memoria = $request->get('Memoria2');
        $equipo->SIM = $request->get('SIM2');
        $equipo->Golpes = $request->get('Golpes2');
        $equipo->Tiene_Bateria = $request->get('Tiene_Bateria2');
        $equipo->save();
        return back()->with('success', '<a target="_blank" href="/imprimir/id=' . $equipo->id . '&csrf=' . $token . '">Ticket Generado con exito <br> Imprime Esta Orden dando Click aqui</a>');
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
        $equipo = \App\Models\Equipo::find($id);
        $equipo->id_servicio = $request->get('id_servicio5');
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
        $equipo = \App\Models\Equipo::find($id);

        if ($equipo != null) {
            $equipo->status = $request->get('status3');

            if ($equipo->status == 0) {
                $stat = "Recibido";
            } elseif ($equipo->status == 1) {
                $stat = "En Revision";
            } elseif ($equipo->status == 2) {
                $stat = "Cancelado";
            } elseif ($equipo->status == 3) {
                $stat = "Espera";
            } elseif ($equipo->status == 4) {
                $stat = " A espera de Cliente(Contactarse a Sucursal)";
            } elseif ($equipo->status == 5) {
                $stat = 'Listo(Para entregar)';
            } elseif ($equipo->status == 6) {
                $stat = " Entregado";
            }
            if ($equipo->status == 2 || $equipo->status == 6) {
                $equipo->fecha_entrega = new \DateTime("now");
                $dia1 = $equipo->fecha_entrega->format("d");
                $mes = $equipo->fecha_entrega->format("m");
                $ano = $equipo->fecha_entrega->format("Y");
                if ($mes == 1) {
                    $mes1 = 'Enero';
                } elseif ($mes == 2) {
                    $mes1 = 'Febrero';
                } elseif ($mes == 3) {
                    $mes1 = 'Marzo';
                } elseif ($mes == 4) {
                    $mes1 = 'Abril';
                } elseif ($mes == 5) {
                    $mes1 = 'Mayo';
                } elseif ($mes == 6) {
                    $mes1 = 'Junio';
                } elseif ($mes == 7) {
                    $mes1 = 'Julio';
                } elseif ($mes == 8) {
                    $mes1 = 'Agosto';
                } elseif ($mes == 9) {
                    $mes1 = 'Septiembre';
                } elseif ($mes == 10) {
                    $mes1 = 'Octubre';
                } elseif ($mes == 11) {
                    $mes1 = 'Noviembre';
                } elseif ($mes == 12) {
                    $mes1 = 'Diciembre';
                }
                $equipo->save();

                return back()->with('success', "Status Cambiado: " . $stat . ' el ' . $dia1 . '-' . $mes1 . '-' . $ano);
            }
            $equipo->save();
            return back()->with('success', "Status Cambiado");
        } else {
            return back()->with('warning', 'Status no se pudo Cambiar intente de nuevo ');
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
        $equipo = \App\Models\Equipo::find($id);
        if ($equipo != null) {
            $equipo->delete();
            return back()->with('success', "Equipo Borrado");
        } else {
            return back()->with('warning', 'Equipo no se pudo Borrar ');
        }
    }

    public function enviar_SMS(int $number,$message)
    {
        $number = "+destinario";
        $message = "mensaje";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://ghostunlock.com/smsapinew2.php");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "number=" . $number . "&message=" . $message . "&user=jasms&apikey=chotita");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        curl_close($ch);
        return $server_output;
    }
}
