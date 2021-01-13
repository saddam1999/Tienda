<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->nullable();
            $table->integer('id_cliente')->nullable();
            $table->integer('id_sucursal')->nullable();
            $table->string('serial')->nullable();
            $table->integer('imei')->nullable();
            $table->string('id_captura')->nullable();
            $table->string('id_servicio')->nullable();
            $table->integer('id_comentario')->nullable();///
            $table->integer('id_pago')->nullable();
            $table->string('anticipo')->nullable();//anticipo
            $table->string('pago')->nullable();//pago recibido
            $table->string('presupuesto')->nullable();//presupuesto
            $table->string('inversion')->nullable();//presupuesto
            $table->date('fecha_recibido')->nullable();
            $table->date('fecha_entrega')->nullable();
            $table->string('status')->nullable();
            $table->string('modelo')->nullable();
            $table->string('uniqueid')->nullable();
            $table->string('Tiene_Camara')->nullable();
            $table->string('Centro_Carga')->nullable();
            $table->string('Señal')->nullable();
            $table->string('LectorSD')->nullable();
            $table->string('AltaVoz')->nullable();
            $table->string('BotonHome')->nullable();
            $table->string('Microfono')->nullable();
            $table->string('Lector_SIM')->nullable();
            $table->string('Volumenplus')->nullable();
            $table->string('Volumenless')->nullable();
            $table->string('Encendido')->nullable();
            $table->string('Auxiliar')->nullable();
            $table->string('Auricular')->nullable();
            $table->string('Touch')->nullable();
            $table->string('Bateria')->nullable();
            $table->string('Enciende')->nullable();
            $table->string('Memoria')->nullable();
            $table->string('SIM')->nullable();
            $table->string('Golpes')->nullable();
            $table->string('Tiene_Bateria')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
