<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    /** @use HasFactory<\Database\Factories\TurnoFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre_cliente',
        'email',
        'telefono',
        'fecha',
        'hora',
        'cantidad_personas',
        'observaciones',
    ];

    protected function casts(): array
    {
        return [
            'fecha' => 'date',
            'cantidad_personas' => 'integer',
        ];
    }

    public function servicios()
    {
        return $this->belongsToMany(Servicio::class, 'servicio_turno')->withTimestamps();
    }
}
