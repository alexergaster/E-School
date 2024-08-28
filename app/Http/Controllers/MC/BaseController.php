<?php

namespace App\Http\Controllers\MC;

use App\Http\Controllers\Controller;
use App\Services\MC\Service;

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service){
        $this->service = $service;
    }
}
