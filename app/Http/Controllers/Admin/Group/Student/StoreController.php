<?php

namespace App\Http\Controllers\Admin\Group\Student;

use App\Http\Requests\GroupStudentRequest;
use App\Models\Group;
use Illuminate\Http\RedirectResponse;

class StoreController extends BaseController
{
    public function __invoke($id, GroupStudentRequest $request): RedirectResponse
    {
        $group = Group::findOrFail($id);

        $data = $request->validated();

        foreach ($data['students'] as $student) {
            if (!$group->students()->where('student_id', $student)->exists()) {
                $group->students()->attach($student);
            }
        }

        return redirect()->route('admin.groups.students.index', $id)->with('success', 'Студента успішно додано до групи.');
    }
}
