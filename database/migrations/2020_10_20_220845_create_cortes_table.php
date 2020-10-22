<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCortesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cortes', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('id_caja')->nullable();
            $table->string('id_pago')->nullable();
            $table->string('id_sucursal')->nullable();
            $table->boolean('abierto')->nullable();
            $table->float('corte_total')->nullable();
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
        Schema::dropIfExists('cortes');
    }
}
