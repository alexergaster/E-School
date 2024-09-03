<?php

namespace App\Http\Controllers\Teacher\Group\Lesson;

use App\Models\Group;
use Illuminate\View\View;

class IndexController extends BaseController
{
    public function __invoke($teacher_id, $group_id):view
    {
        $group = Group::findOrFail($group_id);
        $lessons = $group->lessons()->orderBy('lesson_number', 'desc')->get();

        return view('teacher.group.lesson.index', compact('lessons', 'teacher_id', 'group'));
    }
}
