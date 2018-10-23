<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table    = "noticias";
    protected $fillable = [
        'nombre', 'descripcion', 'orden', 'pdf', 'imagen', 'fecha',
    ];

    public function getfechaAttribute($date)
    {
        return $date = \Carbon\Carbon::parse($date)->format('d-m-y');
    }

    public function setfechaAttribute($date)
    {
        $this->attributes['fecha'] = \Carbon\Carbon::parse($date)->format('Y-m-d');
    }
}
