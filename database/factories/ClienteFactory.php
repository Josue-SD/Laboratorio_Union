<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;

class ClienteFactory extends Factory
{
    protected $model = Cliente::class;

    public function definition(): array
    {
        return [
            'nombreCompletoCliente' => $this->faker->name,
            'correoCliente' => $this->faker->unique()->safeEmail,
            'telefonoCliente' => $this->faker->phoneNumber,
            'fechaNacimientoCliente' => $this->faker->date(),
            'genero' => $this->faker->randomElement(['M', 'F']), // Masculino o Femenino
        ];
    }
}
