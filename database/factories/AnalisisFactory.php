<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Analisis;

class AnalisisFactory extends Factory
{
    protected $model = Analisis::class;

    public function definition(): array
    {
        return [
            'nombreAnalisis' => $this->faker->word,
            'descripcionAnalisis' => $this->faker->text(200), // Descripción aleatoria
            'precioAnalisis' => $this->faker->randomNumber(4), // Precio aleatorio entre 1000 y 9999
            'unidadMedidaAnalisis' => $this->faker->randomElement(['mg', 'g', 'ml', 'l']),
            'rangoReferenciaAnalisis' => $this->faker->randomElement(['0-10', '10-50', '50-100']),
            'estadoAnalisis' => $this->faker->randomElement(['activo', 'inactivo']),
        ];
    }
}
