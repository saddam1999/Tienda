<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleinventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleinventarios', function (Blueprint $table) {
            $table->integer('inventario_id')->unsigned(); //llave foranea
            $table->foreign('inventario_id')->references('id')->on('inventario')->onDelete('cascade');
            $table->integer('articulo_id')->unsigned(); //llave foranea
            $table->foreign('articulo_id')->references('id')->on('articulo')->onDelete('cascade');
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
        Schema::dropIfExists('detalleinventarios');
    }
}
