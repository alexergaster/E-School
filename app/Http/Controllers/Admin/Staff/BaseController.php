<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Controllers\Controller;
use App\Services\Staff\Service;

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service){
        $this->service = $service;
    }
}
