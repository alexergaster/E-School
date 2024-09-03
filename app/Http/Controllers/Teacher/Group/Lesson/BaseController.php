<?php

namespace App\Http\Controllers\Teacher\Group\Lesson;

use App\Http\Controllers\Controller;
use App\Services\Teacher\Group\Lesson\Service;

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
