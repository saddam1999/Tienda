<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromocionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocions', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->string('titulo_banner_principal')->nullable();
            $table->string('descripcion_banner_principal')->nullable();
            $table->string('descuento_banner_principal')->nullable();
            $table->string('bannera')->nullable();
            $table->string('texto_bannera')->nullable();
            $table->string('bannerb')->nullable();
            $table->string('texto_bannerb')->nullable();
            $table->string('bannerc')->nullable();
            $table->string('texto_bannerc')->nullable();
            $table->string('bannerd')->nullable();
            $table->string('texto_bannerd')->nullable();
            $table->string('extra1')->nullable();
            $table->string('extra2')->nullable();
            $table->string('extra3')->nullable();
            $table->string('extra4')->nullable();
            $table->string('extra5')->nullable();
            $table->string('extra6')->nullable();
            $table->string('extra7')->nullable();
            $table->string('extra8')->nullable();
            $table->string('extra9')->nullable();
            $table->string('id_sucursal')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_final')->nullable();
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
        Schema::dropIfExists('promocions');
    }
}
