<?php

namespace App\Http\Controllers\Teacher\Group\Lesson;

use Illuminate\Http\RedirectResponse;

class CreateController extends BaseController
{
    public function __invoke($id_teacher, $id_group): RedirectResponse
    {
        return $this->service->store($id_teacher, $id_group);
    }
}
