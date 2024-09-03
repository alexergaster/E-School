<?php

namespace App\Http\Controllers\Auth\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class TeacherLogoutController extends BaseController
{
    public function __invoke(): RedirectResponse
    {
        Auth::guard('teacher')->logout();
        return redirect()->route("home.index");
    }
}
