<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notificacion;

class NotificacionesTableSeeder extends Seeder
{
    public function run()
    {
        Notificacion::create([
            'idUsuarioNotificacion' => 1, // Asegúrate de que el usuario existe
            'idClienteNotificacion' => 1, // Asegúrate de que el cliente existe
            'mensajeNotificacion' => 'Tienes un nuevo análisis disponible.',
            'tipoNotificacion' => 'nuevo análisis',
            'estadoNotificacion' => 'pendiente',
        ]);

        Notificacion::create([
            'idUsuarioNotificacion' => 2,
            'idClienteNotificacion' => 2,
            'mensajeNotificacion' => 'Tu pago ha sido procesado correctamente.',
            'tipoNotificacion' => 'pago procesado',
            'estadoNotificacion' => 'completado',
        ]);
    }
}
