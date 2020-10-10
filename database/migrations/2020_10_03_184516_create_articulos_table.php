<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('id_marca')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('existencia')->nullable();
            $table->integer('precio')->nullable();
            $table->string('imagena')->nullable();
            $table->string('imagenb')->nullable();
            $table->string('imagenc')->nullable();
            $table->string('imagend')->nullable();
            $table->float('descuento')->nullable();
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
        Schema::dropIfExists('articulos');
    }
}
