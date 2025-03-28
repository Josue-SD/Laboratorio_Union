<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;


class ClientesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('clientes')->insert([
            [
                'nombreCompletoCliente' => 'Carlos Gómez', // Cambié 'nombre' por 'nombreCompletoCliente'
                'correoCliente' => 'carlos@laboratoriounion.com',
                'telefonoCliente' => '555-1234',
                'fechaNacimientoCliente' => '1990-05-15', // Asigné una fecha de nacimiento
                'genero' => 'M', // Asigné un valor de género
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombreCompletoCliente' => 'María López',
                'correoCliente' => 'maria@laboratoriounion.com',
                'telefonoCliente' => '555-5678',
                'fechaNacimientoCliente' => '1985-08-20',
                'genero' => 'F',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
