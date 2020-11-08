<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago__equipos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->nullable();
            $table->integer('id_cliente')->nullable();
            $table->integer('id_equipo')->nullable();
            $table->integer('id_servicio')->nullable();
            $table->integer('id_sucursal')->nullable();
            $table->integer('id_caja')->nullable();
            $table->integer('id_corte')->nullable();
            $table->float('monto')->nullable();// 1600
            $table->float('pagado')->nullable();//pagado 1060
            $table->float('adelanto')->nullable();//adelanto 100
            $table->float('iva')->nullable();//iva
            $table->float('total')->nullable();
            $table->string('comentario')->nullable();
            $table->string('status')->nullable();
            $table->date('fecha')->nullable();
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
        Schema::dropIfExists('pago__equipos');
    }
}
