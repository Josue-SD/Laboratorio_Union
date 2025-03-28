<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('ordenes_detalle', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idOrdenDetalle')->constrained('ordenes')->onDelete('cascade');
            $table->foreignId('idAnalisisDetalle')->constrained('analisis')->onDelete('cascade');
            $table->decimal('precioUnitario', 10, 2);
            $table->string('resultado', 100)->nullable();
            $table->string('estado', 45);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('ordenes_detalle');
    }
};