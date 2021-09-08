<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    //
    protected $table = 'jugadores';

    protected $fillable = [
        'equipo_id',
        'nombre',
        'estatura',
    ];

    public function equipo() {
        return $this->belongsTo(Equipo::class);
    }
}
