<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('resultados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idUsuarioResultado')->constrained('users')->onDelete('cascade');
            $table->foreignId('idOrdenDetalleResultado')->constrained('ordenes_detalle')->onDelete('cascade');
            $table->string('valorObtenidoResultado', 200);
            $table->string('interpretacionResultado', 200);
            $table->date('fechaResultado');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('resultados');
    }
};
