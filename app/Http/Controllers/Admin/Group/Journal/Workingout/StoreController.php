<?php

namespace App\Http\Controllers\Admin\Group\Journal\Workingout;

use App\Http\Requests\WorkingoutRequest;
use App\Models\Workingout;
use Illuminate\Http\RedirectResponse;

class StoreController extends BaseController
{
    public function __invoke($id_group, $id_lesson, WorkingoutRequest $workingoutRequest): RedirectResponse
    {
        $data = $workingoutRequest->validated();

        Workingout::updateOrCreate($data);

        return redirect()->route('admin.groups.journal.show', ['id' => $id_group, 'lesson' => $id_lesson ])->with('status', 'Working-out created successfully!');
    }
}
