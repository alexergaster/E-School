<?php

namespace App\Http\Controllers\Admin\Parent;

use App\Http\Controllers\Controller;
use App\Services\Parent\Service;

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service){
        $this->service = $service;
    }
}
