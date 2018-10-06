<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mision extends Model
{
    protected $table    = "misiones";
    protected $fillable = [
        'nombre', 'descripcion', 'contenido', 'pdf', 'imagen',
    ];
}
