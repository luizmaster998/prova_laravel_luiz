<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certidao extends Model
{
    protected $fillable = [
        'Tipocertidao', 'Envolvido1' , 'Envoldido2' , 'data', 'nomeTabeliao '
    ];
}
