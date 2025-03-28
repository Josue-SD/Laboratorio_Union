<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenDetalle extends Model
{
    use HasFactory;

    // Definir la tabla asociada al modelo
    protected $table = 'ordenes_detalle';

    // Definir las columnas que son asignables en masa (mass assignable)
    protected $fillable = [
        'idOrden',
        'idAnalisisDetalle',
        'precioUnitario',
        'resultado',
        'estado',
    ];

    // Relación con el modelo 'Orden'
    public function orden()
    {
        return $this->belongsTo(Orden::class, 'idOrden');
    }

    // Relación con el modelo 'Analisis'
    public function analisis()
    {
        return $this->belongsTo(Analisis::class, 'idAnalisisDetalle');
    }
}
