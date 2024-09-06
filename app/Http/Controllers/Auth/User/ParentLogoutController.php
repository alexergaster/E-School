<?php

namespace App\Http\Controllers\Auth\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ParentLogoutController extends BaseController
{
    public function __invoke(): RedirectResponse
    {
        Auth::guard('parent')->logout();
        return redirect()->route("home.index");
    }
}
