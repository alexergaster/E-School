<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Requests\Auth\UserRequest;
use Illuminate\Http\RedirectResponse;

class LoginController extends BaseController
{
    public function __invoke(UserRequest $userRequest): RedirectResponse
    {
        $data = $userRequest->validated();

        return $this->service->login($data);
    }
}
