<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');//
            $table->string('email')->unique();//
            $table->string('telefono')->nullable();
            $table->string('paypal')->nullable();
            $table->string('status')->nullable();//
            $table->string('rol')->nullable();//
            $table->string('banco')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telegram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('id_sucursal')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('photo')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->string('Notificacion_SMS')->nullable();
            $table->string('Notificacion_Whatsapp')->nullable();
            $table->string('Notificacion_Telegram')->nullable();
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
        Schema::dropIfExists('users');
    }
}
