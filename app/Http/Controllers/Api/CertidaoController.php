<?php

namespace App\Http\Controllers\Api;

use App\Certidao;
use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;

class CertidaoController extends BaseController
{
    public function __construct()
    {
        $this->classe = Certidao::class;
    }
}
