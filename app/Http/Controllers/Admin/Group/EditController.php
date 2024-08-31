<?php

namespace App\Http\Controllers\Admin\Group;

use App\Models\Group;
use App\Models\Program;
use App\Models\Staff;
use Illuminate\View\View;

class EditController extends BaseController
{
    public function __invoke($id): view
    {
        $group = Group::findOrFail($id);
        $teachers = Staff::all();
        $programs = Program::all();

        return view('admin.group.edit', compact('group', 'teachers', 'programs'));
    }
}
