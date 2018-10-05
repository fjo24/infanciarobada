<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenido_red extends Model
{
    protected $table    = "contenido_redes";
    protected $fillable = [
        'nombre', 'descripcion', 'contenido', 'pdf', 'imagen',
    ];
}
