<?php

namespace App\Http\Controllers\Admin\Workingout;

use App\Http\Requests\WorkingoutRequest;
use App\Models\Workingout;
use Illuminate\Http\RedirectResponse;

class StoreController
{
    public function __invoke(WorkingoutRequest $storeRequest): RedirectResponse
    {
        $data = $storeRequest->validated();

        Workingout::create($data);

        return redirect()->route('admin.workingout.index')->with('status', 'Working-out created successfully!');
    }
}
