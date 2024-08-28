<?php

namespace App\Http\Controllers\MC;

use App\Models\RegistrationMC;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $MKs = RegistrationMC::all();
        dd($MKs);
    }
}
