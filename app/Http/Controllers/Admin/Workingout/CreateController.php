<?php

namespace App\Http\Controllers\Admin\Workingout;

use App\Models\Group;
use App\Models\Lesson;
use App\Models\Staff;
use App\Models\Student;
use Illuminate\View\View;

class CreateController
{
    public function __invoke(): view
    {
        $lessons = Lesson::all();
        $students = Student::all();
        $teachers = Staff::all();

        return view('admin.workingout.create', compact('lessons', 'students', 'teachers'));
    }
}
