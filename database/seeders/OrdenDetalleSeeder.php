<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrdenDetalle;

class OrdenDetalleSeeder extends Seeder
{
    public function run()
    {
        OrdenDetalle::create([
            'idOrden' => 1, // Asegúrate de que las órdenes y análisis existen
            'idAnalisisDetalle' => 1, // Asegúrate de que los análisis existen
            'precioUnitario' => 100.50,
            'resultado' => 'Normal',
            'estado' => 'pendiente',
        ]);

        OrdenDetalle::create([
            'idOrden' => 1,
            'idAnalisisDetalle' => 2,
            'precioUnitario' => 200.75,
            'resultado' => 'Anormal',
            'estado' => 'completo',
        ]);
    }
}
