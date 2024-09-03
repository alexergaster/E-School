<?php

namespace App\Http\Controllers\Teacher\Group\Lesson;

use Illuminate\Http\RedirectResponse;

class DestroyController extends BaseController
{
    public function __invoke($teacher_id, $group_id, $lesson_id): RedirectResponse
    {
        return $this->service->destroy($teacher_id, $group_id, $lesson_id);
    }
}
