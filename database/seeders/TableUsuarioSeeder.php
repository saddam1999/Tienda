<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TableUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $User=  new \App\Models\User;
        $User->name="Napoleon";
        $User->email="gomezlopeznapoleon@gmail.com";
        $contraseñaantigua=12345678;
        $User->password=bcrypt($contraseñaantigua);
        $User->rol="admin";
        $User->id_sucursal=1;
        $User->status=1;
        $User->save();

        $User=  new \App\Models\User;
        $User->name="Jhon Smith";
        $User->email="juancorreo@gmail.com";
        $contraseñaantigua=12345678;
        $User->password=bcrypt($contraseñaantigua);
        $User->rol="tecnico";
        $User->id_sucursal=1;
        $User->status=1;
        $User->save();

        $User=  new \App\Models\User;
        $User->name="De Mostrador";
        $User->email="clientequenoseregistro@sinregistro.com";
        $contraseñaantigua=12345678;
        $User->password=bcrypt($contraseñaantigua);
        $User->rol="cliente";
        $User->id_sucursal=1;
        $User->status=1;
        $User->save();


        $Servicio=  new \App\Models\Servicio;
        $Servicio->nombre = "Revision de Equipo";
        $Servicio->descripcion = "Con este servicio revisamos tu equipo a detalle en busqueda de cualquier daño que te notificaremos apenas tengamos algo.";
        $Servicio->precio =0 ;
        $Servicio->tiempo = "30 minutos";
        $Servicio->save();

        $Servicio=  new \App\Models\Servicio;
        $Servicio->nombre = "Flasheo";
        $Servicio->descripcion = "Con este servicio se realiza un Flasheo Completo";
        $Servicio->precio = 400 ;
        $Servicio->tiempo = "30 minutos";
        $Servicio->save();


        $Pagos=  new \App\Models\Pago;
        $Pagos->nombre = "Efectivo";
        $Pagos->id_sucursal= 1 ; //a quien le pagan
        $Pagos->descripcion = "Pago en Caja";
        $Pagos->banco = "Bancomer";
        $Pagos->client_id = "";
        $Pagos->status =1;//activo
        $Pagos->save();

        $Pagos=  new \App\Models\Pago;
        $Pagos->nombre = "Paypal";
        $Pagos->id_sucursal= 1 ; //a quien le pagan
        $Pagos->descripcion = "Pago con PayPal";
        $Pagos->banco = "Banorte";
        $Pagos->client_id = "AcZuOOumdd7lojl8xftWUROJrcO5uCoUy49jdZnQAzQfcWrb4ziEJ2ooYq-mAzAyioNBsvmhFBlMcy64";
        $Pagos->status =1;//activo
        $Pagos->save();


        $Pago__Equipo=  new \App\Models\Pago_Equipo;
        $Pago__Equipo->id_user = 1;//cajero
        $Pago__Equipo->id_cliente= 1 ; //quien paga
        $Pago__Equipo->id_equipo = 1;// que equipo se paga
        $Pago__Equipo->id_servicio = 2;//servicio solicitado
        $Pago__Equipo->id_sucursal = 1;//sucursal donde se pago
        $Pago__Equipo->id_caja =1;//Caja donde se recibibio el pago
        $Pago__Equipo->id_corte =1;//#numero del corte que esta a cargo de esta cuenta
        $Pago__Equipo->monto =200;//anticipo
        $Pago__Equipo->pagado =400;//total pagado
        $Pago__Equipo->adelanto =400;//total pagado
        $Pago__Equipo->status =1;//activo
        $Pago__Equipo->save();
    }
}
