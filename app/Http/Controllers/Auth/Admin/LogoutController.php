<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Requests\Auth\AdminRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LogoutController extends BaseController
{
    public function __invoke(): RedirectResponse
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
