<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->id('idOrden');

            // Relación con la tabla 'users' (usuarios)
            $table->unsignedBigInteger('idUsuarioOrdenes');
            $table->foreign('idUsuarioOrdenes')->references('id')->on('users')->onDelete('cascade');

            // Relación con la tabla 'clientes'
            $table->unsignedBigInteger('idClienteOrdenes');
            $table->foreign('idClienteOrdenes')->references('id')->on('clientes')->onDelete('cascade');

            // Otros campos
            $table->date('fechaSolicitudOrden');
            $table->string('estadoOrden', 50);  // Ampliado tamaño de estado si es necesario
            $table->decimal('totalOrden', 10, 2);

            // Timestamps
            $table->timestamps();  // Esto agregará 'created_at' y 'updated_at'

            // Índices para mejorar rendimiento en búsquedas
            $table->index('idUsuarioOrdenes');
            $table->index('idClienteOrdenes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenes');
    }
}
