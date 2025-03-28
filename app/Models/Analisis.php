<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analisis extends Model
{
    use HasFactory;

    // Nombre de la tabla (si es diferente al nombre plural del modelo)
    protected $table = 'analisis';

    // Los atributos que pueden ser asignados masivamente
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
    ];

    // Si usas timestamps, se pueden gestionar automáticamente
    public $timestamps = true;
}
