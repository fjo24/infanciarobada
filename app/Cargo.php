<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table    = "cargos";
    protected $fillable = [
        'nombre', 'descripcion', 'orden', 
    ];
    public function referentes()
    {
        return $this->hasMany('App\Referente');
    }
}
