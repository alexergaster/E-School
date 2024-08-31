<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use App\Services\Student\Service;

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service){
        $this->service = $service;
    }
}
