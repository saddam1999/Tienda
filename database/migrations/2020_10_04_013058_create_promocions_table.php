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
            $table->string('bannerb')->nullable();
            $table->string('bannerc')->nullable();
            $table->string('bannerd')->nullable();
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
