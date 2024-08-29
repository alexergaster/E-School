<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Controllers\Admin\Program\BaseController;
use App\Models\Staff;
use Illuminate\View\View;

class IndexController extends BaseController
{
    public function __invoke(): view
    {
        $teachers = Staff::all();

        return view('admin.staff.index', compact('teachers'));
    }
}
