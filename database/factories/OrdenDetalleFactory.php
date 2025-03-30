<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\OrdenDetalle;
use App\Models\Orden;
use App\Models\Analisis;

class OrdenDetalleFactory extends Factory
{
    protected $model = OrdenDetalle::class;

    public function definition(): array
    {
        return [
            'idOrden' => Orden::factory(), // Crea una orden si no existe
            'idAnalisisDetalle' => Analisis::factory(), // Crea un análisis si no existe
            'precioUnitario' => $this->faker->randomFloat(2, 100, 10000), // Precio unitario aleatorio
            'resultado' => $this->faker->randomElement([null, $this->faker->word]), // Resultado o null
            'estado' => $this->faker->randomElement(['pendiente', 'completado', 'cancelado']),
        ];
    }
}
