<?php

namespace App\Http\Controllers\Admin\Group\Journal;

use App\Http\Controllers\Controller;
use App\Services\Admin\Group\Journal\Service;

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
