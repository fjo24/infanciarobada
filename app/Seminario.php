<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seminario extends Model
{
    protected $table    = "seminarios";
    protected $fillable = [
        'nombre', 'descripcion', 'orden', 'pdf', 'imagen',
    ];
}
