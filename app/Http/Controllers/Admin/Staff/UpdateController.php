<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Requests\Staff\UpdateRequest;
use App\Models\Staff;
use Illuminate\Http\RedirectResponse;

class UpdateController extends BaseController
{
    public function __invoke($id, UpdateRequest $updateRequest): RedirectResponse
    {
        $data = $updateRequest->validated();
        $staff = Staff::find($id);

        $this->service->update($staff, $data);

        return redirect()->route('admin.staff.index')->with('status', 'Teacher updated successfully!');
    }
}
