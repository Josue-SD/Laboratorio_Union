<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Notificacion;
use App\Models\OrdenDetalle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsuariosTableSeeder::class,
            RolesPermisosTableSeeder::class,
            ClientesTableSeeder::class,
            OrdenesTableSeeder::class,
            AnalisisTableSeeder::class,
            PagosTableSeeder::class,
            OrdenDetalleSeeder::class,
            ResultadosTableSeeder::class,
            NotificacionesTableSeeder::class,
        ]);
    }
}
