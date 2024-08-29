<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Requests\Staff\StoreRequest;
use Illuminate\Http\RedirectResponse;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $storeRequest): RedirectResponse
    {
        $data = $storeRequest->validated();

        $this->service->store($data);

        return redirect()->route('admin.staff.index')->with('status', 'Teacher created successfully!' );
    }
}
