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

        $Articulo=  new \App\Models\Articulo;
        $Articulo->nombre="iPhone 7";
        $Articulo->id_marca=1;
        $Articulo->categoria=1;
        $Articulo->IDlocal=123123;
        $Articulo->descripcion="Sin duda para mi una de las mejores marcas. Este teléfono en sí es más asequible a día de hoy que los demás. Ya que ya existen muchos nuevos. He de decir, que como fallos, IPHONE tiene muchas actualizaciones, y si no las realizas el móvil es como si dejase de funcionar, se ralentiza, y se…";
        $Articulo->existencia=1;
        $Articulo->precio=10000;
        $Articulo->precioOriginal=10000;
        $Articulo->save();
        $Articulo=  new \App\Models\Articulo;
        $Articulo->nombre="iPhone 8";
        $Articulo->id_marca=1;
        $Articulo->categoria=1;
        $Articulo->IDlocal=12333123;
        $Articulo->descripcion="Sin duda para mi una de las mejores marcas. Este teléfono en sí es más asequible a día de hoy que los demás. Ya que ya existen muchos nuevos. He de decir, que como fallos, IPHONE tiene muchas actualizaciones, y si no las realizas el móvil es como si dejase de funcionar, se ralentiza, y se…";
        $Articulo->existencia=1;
        $Articulo->precio=11000;
        $Articulo->precioOriginal=11000;
        $Articulo->save();

        $Articulo=  new \App\Models\Articulo;
        $Articulo->nombre="iPhone X";
        $Articulo->id_marca=1;
        $Articulo->categoria=1;
        $Articulo->IDlocal=1232323;
        $Articulo->descripcion="Sin duda para mi una de las mejores marcas. Este teléfono en sí es más asequible a día de hoy que los demás. Ya que ya existen muchos nuevos. He de decir, que como fallos, IPHONE tiene muchas actualizaciones, y si no las realizas el móvil es como si dejase de funcionar, se ralentiza, y se…";
        $Articulo->existencia=1;
        $Articulo->precio=20000;
        $Articulo->precioOriginal=20000;
        $Articulo->save();

        $Articulo=  new \App\Models\Articulo;
        $Articulo->nombre="iPhone 11";
        $Articulo->id_marca=1;
        $Articulo->categoria=1;
        $Articulo->IDlocal=1232323;
        $Articulo->descripcion="Sin duda para mi una de las mejores marcas. Este teléfono en sí es más asequible a día de hoy que los demás. Ya que ya existen muchos nuevos. He de decir, que como fallos, IPHONE tiene muchas actualizaciones, y si no las realizas el móvil es como si dejase de funcionar, se ralentiza, y se…";
        $Articulo->existencia=1;
        $Articulo->precio=40000;
        $Articulo->precioOriginal=40000;
        $Articulo->save();

        $Articulo=  new \App\Models\Articulo;
        $Articulo->nombre="iPhone 11";
        $Articulo->id_marca=1;
        $Articulo->categoria=1;
        $Articulo->IDlocal=1232323;
        $Articulo->descripcion="Sin duda para mi una de las mejores marcas. Este teléfono en sí es más asequible a día de hoy que los demás. Ya que ya existen muchos nuevos. He de decir, que como fallos, IPHONE tiene muchas actualizaciones, y si no las realizas el móvil es como si dejase de funcionar, se ralentiza, y se…";
        $Articulo->existencia=1;
        $Articulo->precio=40000;
        $Articulo->precioOriginal=40000;
        $Articulo->descuento=20;
        $Articulo->save();
        $Articulo=  new \App\Models\Articulo;
        $Articulo->nombre="iPhone 11";
        $Articulo->id_marca=1;
        $Articulo->categoria=1;
        $Articulo->IDlocal=1232323;
        $Articulo->descripcion="Sin duda para mi una de las mejores marcas. Este teléfono en sí es más asequible a día de hoy que los demás. Ya que ya existen muchos nuevos. He de decir, que como fallos, IPHONE tiene muchas actualizaciones, y si no las realizas el móvil es como si dejase de funcionar, se ralentiza, y se…";
        $Articulo->existencia=1;
        $Articulo->precio=40000;
        $Articulo->precioOriginal=40000;
        $Articulo->descuento=10;
        $Articulo->save();

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
