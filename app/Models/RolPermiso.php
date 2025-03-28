<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolPermiso extends Model
{
    use HasFactory;

    // Nombre de la tabla (si es diferente al nombre plural del modelo)
    protected $table = 'roles_permisos';

    // Los atributos que pueden ser asignados masivamente
    protected $fillable = [
        'role',
        'permiso',
    ];

    // Si usas timestamps, se pueden gestionar automáticamente
    public $timestamps = true;
}
