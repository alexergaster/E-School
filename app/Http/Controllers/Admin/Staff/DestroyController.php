<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Models\Staff;
use Illuminate\Http\RedirectResponse;

class DestroyController extends BaseController
{
    public function __invoke($id): RedirectResponse
    {
        $this->service->destroy($id);

        return redirect()->route('admin.staff.index')->with('status', 'Teacher deleted successfully!' );
    }
}
