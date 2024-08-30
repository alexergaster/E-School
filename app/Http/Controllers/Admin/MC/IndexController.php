<?php

namespace App\Http\Controllers\Admin\MC;

use App\Models\RegistrationMC;
use Illuminate\View\View;

class IndexController extends BaseController
{
    public function __invoke(): view
    {
        $mcs = RegistrationMC::with('program')->get();

        return view('Admin.mc.index', compact('mcs'));
    }
}
