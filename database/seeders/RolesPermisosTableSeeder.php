<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RolPermiso;

class RolesPermisosTableSeeder extends Seeder
{
    public function run()
    {
        RolPermiso::create([
            'idUsuarioPermiso' => 1,  // Debe hacer referencia al primer usuario creado
            'permiso' => 'admin',
        ]);

        // Si deseas agregar más permisos, puedes hacerlo de la siguiente manera
        RolPermiso::create([
            'idUsuarioPermiso' => 2,  // Referencia al segundo usuario
            'permiso' => 'user',
        ]);
    }
}


