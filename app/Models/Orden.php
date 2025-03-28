<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    // Nombre de la tabla (si es diferente al nombre plural del modelo)
    protected $table = 'ordenes';

    // Los atributos que pueden ser asignados masivamente
    protected $fillable = [
        'cliente_id',
        'fecha',
        'estado',
    ];

    // Relación con el modelo Cliente (Un cliente tiene muchas ordenes)
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Si usas timestamps, se pueden gestionar automáticamente
    public $timestamps = true;
}
