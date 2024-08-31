<?php

namespace App\Http\Controllers\Admin\Group\Student;

use App\Models\Group;
use App\Models\Student;
use Illuminate\View\View;

class CreateController extends BaseController
{
    public function __invoke($id): view
    {
        $group = Group::findOrFail($id);
        $students = Student::all();

        return view('admin.group.student.create', compact('students', 'group'));
    }
}
