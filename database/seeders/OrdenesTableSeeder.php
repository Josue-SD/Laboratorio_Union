<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Orden;

class OrdenesTableSeeder extends Seeder
{
    public function run()
    {
        Orden::create([
            'idUsuarioOrdenes' => 1,  // Asegúrate de que el usuario con id 1 exista
            'idClienteOrdenes' => 1,   // Asegúrate de que el cliente con id 1 exista
            'fechaSolicitudOrden' => now(),
            'estadoOrden' => 'pendiente',
            'totalOrden' => 150.00,    // Ajusta el total de la orden según sea necesario
        ]);

        Orden::create([
            'idUsuarioOrdenes' => 2,  // Asegúrate de que el usuario con id 2 exista
            'idClienteOrdenes' => 2,   // Asegúrate de que el cliente con id 2 exista
            'fechaSolicitudOrden' => now(),
            'estadoOrden' => 'completa',
            'totalOrden' => 200.00,    // Ajusta el total de la orden según sea necesario
        ]);
    }
}
