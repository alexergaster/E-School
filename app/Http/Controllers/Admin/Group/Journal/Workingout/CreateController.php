<?php

namespace App\Http\Controllers\Admin\Group\Journal\Workingout;

use App\Models\Group;
use App\Models\Lesson;
use Illuminate\View\View;

class CreateController extends BaseController
{
    public function __invoke($id_group, $id_lesson): view
    {
        $group = Group::findOrFail($id_group);
        $students = $group->students;
        $lesson = Lesson::findOrFail($id_lesson);
        $teacher = $lesson->teacher;


        return view('admin.group.journal.workingout.create', compact('id_group', 'lesson', 'teacher', 'students'));
    }
}
