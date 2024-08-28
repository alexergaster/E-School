<?php

namespace App\Http\Controllers\MK;

use App\Models\RegistrationMK;

class ShowController extends BaseController
{
    public function __invoke(RegistrationMK $registrationMK)
    {
        dd($registrationMK);
    }
}
