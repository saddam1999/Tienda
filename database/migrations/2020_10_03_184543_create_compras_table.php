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
            $table->integer('id_usuario')->nullable();
            $table->integer('id_articulo')->nullable();
            $table->integer('id_metodo')->nullable();
            $table->integer('id_pago')->nullable();
            $table->integer('id_sucursal')->nullable();
            $table->integer('id_guia')->nullable();
            $table->date('fecha')->nullable();
            $table->integer('status')->nullable(); //0 no avalaible 1 avalaible 2 pending 3suspended 4 success
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
