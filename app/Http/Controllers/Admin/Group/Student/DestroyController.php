<?php

namespace App\Http\Controllers\Admin\Group\Student;

use App\Models\Group;
use Illuminate\Http\RedirectResponse;

class DestroyController extends BaseController
{
    public function __invoke($program_id, $student_id): RedirectResponse
    {
        $group = Group::findOrFail($program_id);

        if ($group->students()->where('student_id', $student_id)->exists()) {
            $group->students()->detach($student_id);
            return redirect()->back()->with('status', 'Студента успішно видалено з групи.');
        }

        return redirect()->back()->with('status', 'Студент не належить до цієї групи.');
    }
}
