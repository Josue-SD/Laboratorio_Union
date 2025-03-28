<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('roles_permisos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idUsuarioPermiso')->constrained('usuarios')->onDelete('cascade');
            $table->string('permiso', 50);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('roles_permisos');
    }
};
