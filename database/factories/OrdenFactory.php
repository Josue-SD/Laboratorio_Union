<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Orden;
use App\Models\User;
use App\Models\Cliente;

class OrdenFactory extends Factory
{
    protected $model = Orden::class;

    public function definition(): array
    {
        return [
            'idUsuarioOrdenes' => User::factory(), // Crea un usuario si no existe
            'idClienteOrdenes' => Cliente::factory(), // Crea un cliente si no existe
            'fechaSolicitudOrden' => $this->faker->date(),
            'estadoOrden' => $this->faker->randomElement(['pendiente', 'procesando', 'completado', 'cancelado']),
            'totalOrden' => $this->faker->randomFloat(2, 100, 10000), // Un total aleatorio entre 100 y 10,000
        ];
    }
}
