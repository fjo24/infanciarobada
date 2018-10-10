<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imgnoticia extends Model
{
    protected $table    = "imgnoticias";
    protected $fillable = [
        'imagen', 'link', 'orden', 'noticia_id',
    ];
}
