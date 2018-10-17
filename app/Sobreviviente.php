<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sobreviviente extends Model
{
    protected $table    = "sobrevivientes";
    protected $fillable = [
        'nombre', 'descripcion', 'orden', 'pdf', 'imagen',
    ];
}
