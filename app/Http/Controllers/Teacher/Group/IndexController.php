<?php

namespace App\Http\Controllers\Teacher\Group;

use App\Models\Staff;
use Illuminate\View\View;

class IndexController extends BaseController
{
    public function __invoke($id): view
    {
        $teacher = Staff::findOrFail($id);

        $groups = $this->service->index($teacher);

        return view('teacher.group.index', compact('groups', 'teacher'));
    }
}
