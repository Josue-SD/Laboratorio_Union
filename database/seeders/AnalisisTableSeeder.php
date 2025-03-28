<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Analisis;

class AnalisisTableSeeder extends Seeder
{
    public function run()
    {
        Analisis::create([
            'nombreAnalisis' => 'Análisis de Sangre',
            'descripcionAnalisis' => 'Análisis general de sangre para evaluar la salud general.',
            'precioAnalisis' => 250,
            'unidadMedidaAnalisis' => 'ml',
            'rangoReferenciaAnalisis' => '4.0 - 5.0',
            'estadoAnalisis' => 'activo',
        ]);

        Analisis::create([
            'nombreAnalisis' => 'Examen de Orina',
            'descripcionAnalisis' => 'Análisis de orina para detectar infecciones urinarias y otras condiciones.',
            'precioAnalisis' => 150,
            'unidadMedidaAnalisis' => 'ml',
            'rangoReferenciaAnalisis' => 'Normal',
            'estadoAnalisis' => 'activo',
        ]);

        Analisis::create([
            'nombreAnalisis' => 'Prueba de Glucosa',
            'descripcionAnalisis' => 'Prueba para medir el nivel de glucosa en sangre y diagnosticar diabetes.',
            'precioAnalisis' => 180,
            'unidadMedidaAnalisis' => 'mg/dL',
            'rangoReferenciaAnalisis' => '70 - 100',
            'estadoAnalisis' => 'activo',
        ]);

        Analisis::create([
            'nombreAnalisis' => 'Colesterol Total',
            'descripcionAnalisis' => 'Medición del colesterol total para evaluar el riesgo cardiovascular.',
            'precioAnalisis' => 200,
            'unidadMedidaAnalisis' => 'mg/dL',
            'rangoReferenciaAnalisis' => '< 200',
            'estadoAnalisis' => 'activo',
        ]);

        Analisis::create([
            'nombreAnalisis' => 'Prueba de Embarazo',
            'descripcionAnalisis' => 'Prueba para detectar la presencia de hormonas del embarazo.',
            'precioAnalisis' => 120,
            'unidadMedidaAnalisis' => 'unidad',
            'rangoReferenciaAnalisis' => 'Positivo/Negativo',
            'estadoAnalisis' => 'activo',
        ]);
    }
}
