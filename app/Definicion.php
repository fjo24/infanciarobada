<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Definicion extends Model
{
    protected $table    = "definiciones";
    protected $fillable = [
        'nombre', 'descripcion', 'orden', 'pdf', 'imagen',
    ];
}
