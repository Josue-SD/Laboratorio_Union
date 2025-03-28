<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idUsuarioNotificacion')->constrained('usuarios')->onDelete('cascade');
            $table->string('mensajeNotificacion', 300);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('notificaciones');
    }
};
