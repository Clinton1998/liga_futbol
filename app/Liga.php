<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liga extends Model
{
    //
    protected $fillable = [
        'nombre',
        'inicio',
        'termino',
        'cantidad_fechas',
    ];

    public function equipos() {
        return $this->belongsToMany(Equipo::class, 'liga_equipo', 'liga_id', 'equipo_id');
    }
}
