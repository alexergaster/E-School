<?php

namespace App\Http\Controllers\Admin\Parent;

use App\Models\ParentUser;
use Illuminate\View\View;

class EditController extends BaseController
{
    public function __invoke($id): view
    {
        $parent = ParentUser::findOrFail($id);

        return view('admin.parent.edit', compact('parent'));
    }
}
