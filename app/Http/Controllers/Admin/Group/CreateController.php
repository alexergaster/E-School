<?php

namespace App\Http\Controllers\Admin\Group;

use App\Models\Group;
use App\Models\Program;
use App\Models\Staff;
use Illuminate\View\View;

class CreateController extends BaseController
{
    public function __invoke(): view
    {
        $teachers = Staff::all();
        $programs = Program::all();

        return view('admin.group.create', compact('teachers', 'programs'));
    }
}
