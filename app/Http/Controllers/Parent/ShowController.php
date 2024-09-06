<?php

namespace App\Http\Controllers\Parent;

use App\Models\ParentUser;

class ShowController extends BaseController
{
    public function __invoke($id)
    {
        $parent = ParentUser::findOrFail($id);
        $children = $parent->student()->with('groups.program')->get();

        return view('parent.show', compact('parent', 'children'));
    }
}
