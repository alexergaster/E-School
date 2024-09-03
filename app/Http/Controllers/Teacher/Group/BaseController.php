<?php

namespace App\Http\Controllers\Teacher\Group;

use App\Http\Controllers\Controller;
use App\Services\Teacher\Service;

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
