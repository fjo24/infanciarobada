<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imgevento extends Model
{
    protected $table    = "imgeventos";
    protected $fillable = [
        'imagen', 'link', 'evento_id',
    ];
}
