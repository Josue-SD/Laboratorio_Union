<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Notificacion;
use App\Models\OrdenDetalle;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\RolPermiso;
use App\Models\Cliente;
use App\Models\Orden;
use App\Models\Pago;
use App\Models\Analisis;
use App\Models\Resultado;

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

        User::factory(10)->create();
        RolPermiso::factory(10)->create(); 
        Cliente::factory(10)->create();
        Notificacion::factory(10)->create();
        Orden::factory(10)->create();
        Pago::factory(10)->create(); 
        Analisis::factory(10)->create();
        OrdenDetalle::factory(10)->create();
        Resultado::factory(10)->create(); 
    }
}
