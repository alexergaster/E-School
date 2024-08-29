<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Services\Gallery\Service;

class BaseController extends Controller
{
    protected Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
