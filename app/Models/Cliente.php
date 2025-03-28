<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Nombre de la tabla (si es diferente al nombre plural del modelo)
    protected $table = 'clientes';

    // Los atributos que pueden ser asignados masivamente
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'direccion',
    ];

    // Si usas timestamps, se pueden gestionar automáticamente
    public $timestamps = true;
}
