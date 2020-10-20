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
            $table->integer('id_user');
            $table->integer('id_cliente');
            $table->string('id_equipo');
            $table->float('monto');
            $table->float('adelanto');
            $table->string('comentario');
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
