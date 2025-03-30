<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Notificacion;
use App\Models\User;
use App\Models\Cliente;

class NotificacionFactory extends Factory
{
    protected $model = Notificacion::class;

    public function definition(): array
    {
        return [
            'idUsuarioNotificacion' => User::factory(), // Crea un usuario si no existe
            'idClienteNotificacion' => Cliente::factory(), // Crea un cliente si no existe
            'mensajeNotificacion' => $this->faker->sentence(10),
            'tipoNotificacion' => $this->faker->randomElement(['email', 'SMS', 'push']),
            'estadoNotificacion' => $this->faker->randomElement(['pendiente', 'enviado', 'fallido']),
        ];
    }
}
