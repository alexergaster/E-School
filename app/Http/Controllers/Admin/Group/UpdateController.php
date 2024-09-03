<?php

namespace App\Http\Controllers\Admin\Group;

use App\Http\Requests\GroupRequest;
use App\Models\Group;
use Illuminate\Http\RedirectResponse;

class UpdateController extends BaseController
{
    public function __invoke($id, GroupRequest $groupRequest): RedirectResponse
    {
        $data = $groupRequest->validated();

        $group = Group::findOrFail($id);

        $group->update($data);

        return redirect()->route('admin.groups.index')->with('status', 'Group updated successfully!');
    }
}
