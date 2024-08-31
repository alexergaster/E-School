<?php

namespace App\Http\Controllers\Admin\Group;

use App\Models\Group;
use Illuminate\View\View;

class IndexController extends BaseController
{
    public function __invoke(): view
    {
        $groups = Group::with('program', 'teacher')->paginate(10);

        return view('admin.group.index', compact('groups'));
    }
}
