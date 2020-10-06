<?php

namespace App\Http\Controllers\Api;

use App\Tabeliao;
use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;

class TabeliaoController extends BaseController
{
    public function __construct()
    {
        $this->classe = Tabeliao::class;
    }
}
