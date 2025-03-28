<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombreCompletoCliente', 200);
            $table->string('correoCliente', 150)->unique();
            $table->string('telefonoCliente', 150);
            $table->date('fechaNacimientoCliente');
            $table->char('genero', 1);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('clientes');
    }
};
