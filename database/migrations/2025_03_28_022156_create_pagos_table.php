<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idUsuarioPagos')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('idOrdenPagos')->constrained('ordenes')->onDelete('cascade');
            $table->string('montoPago', 50);
            $table->string('estadoPago', 45);
            $table->date('fechaPago');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('pagos');
    }
};
