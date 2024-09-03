<?php

namespace App\Http\Controllers\Admin\Group\Journal;

use App\Models\Group;
use Illuminate\View\View;

class IndexController extends BaseController
{
    public function  __invoke($id): view
    {
        $group = Group::findOrFail($id);
        $lessons = $group->lessons()->orderBy('lesson_number', 'desc')->get();;

        return view('admin.group.journal.index', compact('group', 'lessons'));
    }
}
