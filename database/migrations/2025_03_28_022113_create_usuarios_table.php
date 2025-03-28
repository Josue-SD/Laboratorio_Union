<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombreUsuario', 150);
            $table->string('correoUsuario', 150)->unique();
            $table->string('contraseniaUsuario');
            $table->string('rolUsuario', 50);
            $table->string('estadoUsuario', 50);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('usuarios');
    }
};
