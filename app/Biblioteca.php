<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
    protected $table    = "bibliotecas";
    protected $fillable = [
        'nombre', 'descripcion', 'orden', 'pdf', 'imagen',
    ];
}
