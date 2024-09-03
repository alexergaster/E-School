<?php

namespace App\Http\Controllers\Teacher\Group\Lesson;

use App\Models\Group;
use App\Models\Lesson;
use App\Models\Student;
use Illuminate\View\View;

class EditController extends BaseController
{
    public function __invoke($teacher_id, $group_id, $lesson_id):view
    {
        $lesson = Lesson::findOrFail($lesson_id);
        $group = $lesson->group;

        $students = $lesson->students;

        return view('teacher.group.lesson.edit', compact('lesson', 'students', 'group', 'teacher_id'));
    }
}
