<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;

    // Definir la tabla asociada al modelo
    protected $table = 'notificaciones';

    // Definir las columnas que son asignables en masa (mass assignable)
    protected $fillable = [
        'idUsuarioNotificacion',
        'idClienteNotificacion',
        'mensajeNotificacion',
        'tipoNotificacion',
        'estadoNotificacion',
    ];

    // Relación con el modelo 'User' (Usuario que generó la notificación)
    public function usuario()
    {
        return $this->belongsTo(User::class, 'idUsuarioNotificacion');
    }

    // Relación con el modelo 'Cliente'
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'idClienteNotificacion');
    }
}
