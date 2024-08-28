<?php

namespace App\Http\Controllers\MK;

use App\Models\RegistrationMK;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $MKs = RegistrationMK::all();
        dd($MKs);
    }
}
