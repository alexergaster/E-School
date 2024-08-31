<?php

namespace App\Http\Controllers\Admin\Parent;

use App\Http\Requests\Parent\UpdateRequest;
use Illuminate\Http\RedirectResponse;

class UpdateController extends BaseController
{
    public function __invoke($id, UpdateRequest $updateRequest): RedirectResponse
    {
        $data = $updateRequest->validated();

        $this->service->update($id, $data);

        return redirect()->route('admin.parents.index')->with('status', 'Parent updated successfully!');
    }
}
