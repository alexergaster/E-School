<?php

namespace App\Services\Teacher\Group\Lesson;

use App\Models\Attendance;
use App\Models\Group;
use App\Models\Lesson;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Service
{
    public function store($id_teacher, $id_group): RedirectResponse
    {
        $group = Group::findOrFail($id_group);

        $lastLesson = $group->lessons()->latest('lesson_number')->first();

        $lessonNumber = $lastLesson ? $lastLesson->lesson_number + 1 : 1;

        $date = Carbon::today()->toDateString();

        $data = ['lesson_number' => $lessonNumber, 'date' => $date, 'id_group' => $id_group, 'id_teacher' => $id_teacher];

        try {
            DB::beginTransaction();

            $lesson = Lesson::create($data);

            DB::commit();

            return redirect()->route('teacher.group.lessons.edit', ['id' => $id_teacher, 'group_id' => $id_group, 'lesson_id' => $lesson->id]);
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->back(302, ['id' => $id_teacher, 'id_group' => $id_group])->withErrors('error', $exception->getMessage());
        }
    }

    public function update(array $data, int $lesson_id): void
    {
        $attendances = $data['attendances'];

        foreach ($attendances as $student_id => $status) {
            Attendance::updateOrCreate(
                [
                    'id_lesson' => $lesson_id,
                    'id_student' => $student_id
                ],
                [
                    'present' => $status
                ]
            );
        }
    }
}
