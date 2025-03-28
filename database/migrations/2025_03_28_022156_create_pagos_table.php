<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            
            // Relación con la tabla 'users' (usuarios)
            $table->foreignId('idUsuarioPagos')->constrained('users')->onDelete('cascade');
            
            // Relación con la tabla 'ordenes' (ordenes) utilizando idOrden
            $table->unsignedBigInteger('idOrdenPagos');
            $table->foreign('idOrdenPagos')->references('idOrden')->on('ordenes')->onDelete('cascade');
            
            // Otros campos
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
