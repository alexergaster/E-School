<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Requests\Staff\StoreRequest;
use App\Models\Staff;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;

class DestroyController extends BaseController
{
    public function __invoke($id): RedirectResponse
    {
        $this->service->destroy($id);

        Staff::destroy($id);

        return redirect()->route('admin.staff.index')->with('status', 'Teacher deleted successfully!' );
    }
}
