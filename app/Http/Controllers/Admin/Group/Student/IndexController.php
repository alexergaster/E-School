<?php

namespace App\Http\Controllers\Admin\Group\Student;

use App\Models\Group;
use Illuminate\View\View;

class IndexController extends BaseController
{
    public function __invoke($program_id): view
    {
        $group = Group::findOrFail($program_id);

        $students = $group->students;


        return view('admin.group.student.index', compact('group', 'students'));
    }
}
