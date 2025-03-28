<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pago;

class PagosTableSeeder extends Seeder
{
    public function run()
    {
        // Asegúrate de que los usuarios y las órdenes existan antes de insertar los pagos

        Pago::create([
            'idUsuarioPagos' => 1, // Asegúrate de que el ID del usuario exista en la tabla 'users'
            'idOrdenPagos' => 1, // Asegúrate de que el ID de la orden exista en la tabla 'ordenes'
            'montoPago' => '150.00',
            'estadoPago' => 'completado',
            'fechaPago' => now(),
        ]);

        Pago::create([
            'idUsuarioPagos' => 2, // Asegúrate de que el ID del usuario exista en la tabla 'users'
            'idOrdenPagos' => 2, // Asegúrate de que el ID de la orden exista en la tabla 'ordenes'
            'montoPago' => '200.00',
            'estadoPago' => 'pendiente',
            'fechaPago' => now(),
        ]);
    }
}
