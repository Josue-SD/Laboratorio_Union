<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->id('idNotificaciones');

            $table->unsignedBigInteger('idUsuarioNotificacion');
            $table->foreign('idUsuarioNotificacion')->references('id')->on('users');

            $table->unsignedBigInteger('idClienteNotificacion');
            $table->foreign('idClienteNotificacion')->references('id')->on('clientes');

            $table->string('mensajeNotificacion', 300);
            $table->string('tipoNotificacion', 45);
            $table->string('estadoNotificacion', 45);

            $table->index('idUsuarioNotificacion');
            $table->index('idClienteNotificacion');

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
        Schema::dropIfExists('notificaciones');
    }
}