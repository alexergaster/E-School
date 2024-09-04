<?php

namespace App\Http\Controllers\Teacher\Workingout;

use App\Models\Staff;
use Illuminate\View\View;

class IndexController
{
    public function __invoke($id_teacher): view
    {
        $teacher = Staff::findOrFail($id_teacher);
        $workingouts = $teacher->workingouts()->with(['teacher', 'student', 'lesson'])->orderBy('date', 'desc')->get();

        return view('teacher.workingout.index', compact('workingouts', 'teacher'));

    }
}
