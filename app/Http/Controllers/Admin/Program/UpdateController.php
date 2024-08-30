<?php

namespace App\Http\Controllers\Admin\Program;

use App\Http\Requests\Program\UpdateRequest;
use Illuminate\Http\RedirectResponse;

class UpdateController extends BaseController
{
    public function __invoke($id, UpdateRequest $updateRequest): RedirectResponse
    {
        $data = $updateRequest->validated();

        $this->service->update($id, $data, $updateRequest);

        return redirect()->route('admin.programs.index')->with('status', 'Program updated successfully!');
    }
}
