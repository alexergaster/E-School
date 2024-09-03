<?php

namespace App\Services\Auth;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class Service
{
    public function loginAdmin(array $data): RedirectResponse
    {
        if (Auth::guard('admin')->attempt($data)) {
            return redirect()->intended('admin');
        }

        return back()->withErrors(['login' => 'Невірний логін або пароль.']);
    }

    public function login(array $data): RedirectResponse
    {
        if (!isset($data['is_teacher']) && Auth::guard('parent')->attempt($data)) {

            $user = Auth::guard('parent')->user();

            return redirect()->intended(route('parent.show', ['id' => $user]));
        }

        unset($data['is_teacher']);

        if (Auth::guard('teacher')->attempt($data)) {

            $teacher = Auth::guard('teacher')->user();

            return redirect()->intended(route('teacher.groups.index', ['id' => $teacher]));
        }

        return back()->withErrors(['error' => 'Невірний email або пароль.']);
    }
}
