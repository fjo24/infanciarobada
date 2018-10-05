<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referente extends Model
{
    protected $table    = "referentes";
    protected $fillable = [
        'nombre', 'cargo_id', 'imagen',
    ];
    public function cargo()
    {
        return $this->belongsTo('App\Cargo');
    }
}
