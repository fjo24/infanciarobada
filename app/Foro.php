<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foro extends Model
{
    protected $table    = "foros";
    protected $fillable = [
        'correo','nombre', 'direccion', 'localidad', 'provincia', 'telefono', 'lng', 'lat','pagina',
    ];
}