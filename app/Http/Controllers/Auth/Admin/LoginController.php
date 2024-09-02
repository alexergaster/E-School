<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Requests\Auth\AdminRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController
{
    public function __invoke(AdminRequest $adminRequest): RedirectResponse
    {
        $data = $adminRequest->validated();

        return $this->service->loginAdmin($data);
    }
}
