<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('setting_nombre')->nullable();
            $table->string('setting_logo')->nullable();
            $table->string('setting_banner')->nullable();
            $table->string('setting_descripcion')->nullable();
            $table->string('setting_abierto')->nullable();
            $table->string('setting_direccion')->nullable();
            $table->string('setting_rfc')->nullable();
            $table->string('setting_contacto')->nullable();
            $table->string('setting_url')->nullable();
            $table->string('setting_plantilla')->nullable();
            $table->string('setting_telefono')->nullable();
            $table->float('setting_iva')->nullable();
            $table->float('setting_descuento_1')->nullable();
            $table->float('setting_descuento_2')->nullable();
            $table->float('setting_descuento_3')->nullable();
            $table->float('setting_descuento_4')->nullable();
            $table->string('setting_moneda')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
