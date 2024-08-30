<?php

namespace App\Http\Controllers\Admin\Program;

use App\Http\Requests\Program\StoreRequest;
use Illuminate\Http\RedirectResponse;

class DestroyController extends BaseController
{
    public function __invoke($id): RedirectResponse
    {
        $this->service->destroy($id);

        return redirect()->route('admin.programs.index')->with('status', 'Program deleted successfully!');
    }
}
