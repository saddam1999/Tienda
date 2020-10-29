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
 

      
    }
}
