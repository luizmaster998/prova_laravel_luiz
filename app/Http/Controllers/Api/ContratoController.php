<?php

namespace App\Http\Controllers\Api;

use App\Contrato;
use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;

class ContratoController extends BaseController
{
    public function __construct()
    {
        $this->classe = Contrato::class;
    }
}
