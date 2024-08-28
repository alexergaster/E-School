<?php

namespace App\Http\Controllers\MC;

use App\Models\RegistrationMC;

class ShowController extends BaseController
{
    public function __invoke(RegistrationMC $registrationMK)
    {
        dd($registrationMK);
    }
}
