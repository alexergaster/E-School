<?php

namespace App\Http\Controllers\Admin\Group\Journal;

use App\Models\Group;
use App\Models\Lesson;
use Illuminate\View\View;

class ShowController extends BaseController
{
    public function __invoke($id, $id_lesson): view
    {
        $lesson = Lesson::findOrFail($id_lesson);
        $students  = $lesson->students;

        return view('admin.group.journal.show', compact( 'id','lesson', 'students'));
    }
}
