<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    //
    protected $fillable = [
        'nombre',
        'cancha',
        'fundacion',
    ];

    public function ligas() {
        return $this->belongsToMany(Liga::class, 'liga_equipo', 'equipo_id', 'liga_id');
    }

    public function jugadores() {
        return $this->hasMany(Jugador::class);
    }
}
