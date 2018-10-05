<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destacado_home extends Model
{
    protected $table    = "destacado_homes";
    protected $fillable = [
        'nombre', 'link', 'orden', 'imagen', 'fecha',
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
