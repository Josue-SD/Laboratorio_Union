<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('analisis', function (Blueprint $table) {
            $table->id();
            $table->string('nombreAnalisis', 150);
            $table->text('descripcionAnalisis')->nullable();
            $table->integer('precioAnalisis');
            $table->string('unidadMedidaAnalisis', 100);
            $table->string('rangoReferenciaAnalisis', 100);
            $table->string('estadoAnalisis', 45);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('analisis');
    }
};
