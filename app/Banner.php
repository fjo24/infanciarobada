<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    protected $table    = "banners";
    protected $fillable = [
        'imagen', 'texto2', 'texto1', 'seccion',
    ];
}
