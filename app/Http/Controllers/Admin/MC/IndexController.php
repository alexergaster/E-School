<?php

namespace App\Http\Controllers\Admin\MC;

use Illuminate\Http\Request;
use App\Models\RegistrationMC;
use Illuminate\View\View;

class IndexController extends BaseController
{
    public function __invoke(Request $request): view
    {
        $search = $request->input('search');

        $mcs = RegistrationMC::when($search, function ($query, $search) {
            return $query->where('parent_name', 'like', '%' . $search . '%');
        })->paginate(10);

        return view('Admin.mc.index', compact('mcs'));
    }
}
