<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RolPermiso>
 */
class RolPermisoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'idUsuarioPermiso' => User::factory(), // Crea un usuario si no existe
            'permiso' => $this->faker->randomElement(['admin', 'editor', 'usuario']), // Puedes personalizar los permisos
        ];
    }
}
