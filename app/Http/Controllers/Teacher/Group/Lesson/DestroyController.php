<?php

namespace App\Http\Controllers\Teacher\Group\Lesson;

use App\Models\Lesson;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class DestroyController extends BaseController
{
    public function __invoke($teacher_id, $group_id, $lesson_id): RedirectResponse
    {

        try {
            DB::beginTransaction();

            $lesson = Lesson::findOrFail($lesson_id);
            $lesson->attendances()->delete();
            $lesson->delete();

            DB::commit();

            return redirect()->route('teacher.group.lessons.index', ['id' => $teacher_id, 'group_id' => $group_id])->with('message', 'Лекція успішно видалена!');

        }catch (\Exception $exception){
            DB::rollBack();

            return redirect()->back(302, [['id' => $teacher_id, 'group_id' => $group_id]])->with('message', $exception->getMessage());
        }

    }
}
