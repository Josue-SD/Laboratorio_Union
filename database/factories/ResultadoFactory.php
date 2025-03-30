<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Resultado;
use App\Models\User;
use App\Models\OrdenDetalle;

class ResultadoFactory extends Factory
{
    protected $model = Resultado::class;

    public function definition(): array
    {
        return [
            'idUsuarioResultado' => User::factory(), // Crea un usuario si no existe
            'idOrdenDetalleResultado' => OrdenDetalle::factory(), // Crea un detalle de orden si no existe
            'valorObtenidoResultado' => $this->faker->word, // Valor obtenido de ejemplo
            'interpretacionResultado' => $this->faker->text(150), // Interpretación aleatoria
            'fechaResultado' => $this->faker->date(), // Fecha aleatoria
        ];
    }
}
