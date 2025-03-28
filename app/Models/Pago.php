<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    // Definir la tabla asociada al modelo
    protected $table = 'pagos';

    // Definir las columnas que son asignables en masa (mass assignable)
    protected $fillable = [
        'idUsuarioPagos',
        'idOrdenPagos',
        'montoPago',
        'estadoPago',
        'fechaPago',
    ];

    // Definir las relaciones con otros modelos
    public function usuario()
    {
        return $this->belongsTo(User::class, 'idUsuarioPagos');
    }

    public function orden()
    {
        return $this->belongsTo(Orden::class, 'idOrdenPagos');
    }
}
