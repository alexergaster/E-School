<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\View\View;

class IndexController extends BaseController
{
    public function __invoke(): view
    {
        return view('auth.admin.login');
    }
}
