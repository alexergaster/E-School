<?php

namespace App\Http\Controllers\Admin\Group;

use App\Models\Group;
use Illuminate\Http\RedirectResponse;

class DestroyController extends BaseController
{
    public function __invoke($id): RedirectResponse
    {
        $group = Group::findOrFail($id);

        $group->students()->detach();

        $group->delete();

        return redirect()->route('admin.groups.index')->with('status', 'Group deleted successfully!');
    }
}
