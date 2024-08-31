<?php

namespace App\Http\Controllers\Admin\Student;

use App\Models\ParentUser;
use App\Models\Student;
use Illuminate\View\View;

class EditController extends BaseController
{
    public function __invoke($id): view
    {
        $student = Student::findOrFail($id);
        $parents = ParentUser::all();

        return view('admin.student.edit', compact('student', 'parents'));
    }
}
