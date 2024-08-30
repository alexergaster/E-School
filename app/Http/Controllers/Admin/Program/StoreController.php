<?php

namespace App\Http\Controllers\Admin\Program;

use App\Http\Requests\Program\StoreRequest;
use Illuminate\Http\RedirectResponse;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $storeRequest): RedirectResponse
    {
        $data = $storeRequest->validated();

        $this->service->store($data, $storeRequest);

        return redirect()->route('admin.programs.index')->with('status', 'Program created successfully!');
    }
}
