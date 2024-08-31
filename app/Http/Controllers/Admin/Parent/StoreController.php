<?php

namespace App\Http\Controllers\Admin\Parent;

use App\Http\Requests\Parent\StoreRequest;
use Illuminate\Http\RedirectResponse;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $storeRequest): RedirectResponse
    {
        $data = $storeRequest->validated();

        $this->service->store($data);

        return redirect()->route('admin.parents.index')->with('status', 'Parent created successfully!');
    }
}
