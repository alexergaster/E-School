<?php

namespace App\Http\Controllers\Admin\Group;

use App\Http\Requests\GroupRequest;
use App\Models\Group;
use Illuminate\Http\RedirectResponse;

class StoreController extends BaseController
{
    public function __invoke(GroupRequest $groupRequest): RedirectResponse
    {
        $data = $groupRequest->validated();

        Group::create($data);

        return redirect()->route('admin.groups.index')->with('status', 'Group created successfully!');
    }
}
