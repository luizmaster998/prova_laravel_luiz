<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contrato extends Model
{
    protected $fillable = [
        'Tipocontrato', 'Envolvido1' , 'Envoldido2' , 'data','valor', 'nomeTabeliao'
    ];
}
