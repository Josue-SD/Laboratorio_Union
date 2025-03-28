<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resultado;

class ResultadosTableSeeder extends Seeder
{
    public function run()
    {
        // Asegúrate de que los usuarios y las ordenes_detalle existan antes de crear los resultados.

        Resultado::create([
            'idUsuarioResultado' => 1, // Asegúrate de que el ID del usuario exista en la tabla 'users'
            'idOrdenDetalleResultado' => 1, // Asegúrate de que el ID de orden_detalle exista
            'valorObtenidoResultado' => '5.2',
            'interpretacionResultado' => 'Nivel normal de glucosa',
            'fechaResultado' => now(),
        ]);

        Resultado::create([
            'idUsuarioResultado' => 2,
            'idOrdenDetalleResultado' => 2,
            'valorObtenidoResultado' => '4.8',
            'interpretacionResultado' => 'Nivel normal de colesterol',
            'fechaResultado' => now(),
        ]);
    }
}
