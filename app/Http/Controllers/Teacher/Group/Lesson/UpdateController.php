<?php

namespace App\Http\Controllers\Teacher\Group\Lesson;

use App\Http\Requests\Teacher\Group\Lesson\UpdateRequest;
use App\Models\Attendance;
use Illuminate\Http\RedirectResponse;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $updateRequest, $teacher_id, $group_id, $lesson_id): RedirectResponse
    {
        $data = $updateRequest->validated();

        $this->service->update($data, $lesson_id);

        return redirect()->route('teacher.group.lessons.edit', ['id' => $teacher_id, 'group_id' => $group_id, 'lesson_id' => $lesson_id])->with('message', 'Дані успішно оновленні!');
    }
}
