<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pago;
use App\Models\User;
use App\Models\Orden;

class PagoFactory extends Factory
{
    protected $model = Pago::class;

    public function definition(): array
    {
        return [
            'idUsuarioPagos' => User::factory(), // Crea un usuario si no existe
            'idOrdenPagos' => Orden::factory(), // Crea una orden si no existe
            'montoPago' => $this->faker->randomFloat(2, 100, 10000), // Monto entre 100 y 10,000
            'estadoPago' => $this->faker->randomElement(['pendiente', 'completado', 'rechazado']),
            'fechaPago' => $this->faker->date(),
        ];
    }
}
