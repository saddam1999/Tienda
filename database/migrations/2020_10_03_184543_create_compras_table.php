<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->integer('id_usuario');
            $table->integer('id_articulo');
            $table->integer('id_metodo');
            $table->integer('id_pago');
            $table->date('fecha');
            $table->integer('id_guia');
            $table->integer('status'); //0 no avalaible 1 avalaible 2 pending 3suspended 4 success
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
        Schema::dropIfExists('compras');
    }
}
