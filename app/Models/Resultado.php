<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;

    // Nombre de la tabla (si es diferente al nombre plural del modelo)
    protected $table = 'resultados';

    // Los atributos que pueden ser asignados masivamente
    protected $fillable = [
        'analisis_id',
        'valor',
        'fecha_resultado',
        'comentarios',
    ];

    // Relación con el modelo Analisis (Un resultado pertenece a un análisis)
    public function analisis()
    {
        return $this->belongsTo(Analisis::class);
    }

    // Si usas timestamps, se pueden gestionar automáticamente
    public $timestamps = true;
}
