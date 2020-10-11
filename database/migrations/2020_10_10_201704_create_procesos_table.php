<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesos', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('id_marca')->nullable();
            $table->float('id_servicio')->nullable();
            $table->integer('status')->nullable();
            $table->string('metodo_pago')->nullable();
            $table->float('pago')->nullable();
            $table->date('fecha_recibido')->nullable();
            $table->date('fecha_entrega')->nullable();
            $table->string('comentario')->nullable();

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
        Schema::dropIfExists('procesos');
    }
}
