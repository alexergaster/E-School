<?php

namespace App\Http\Controllers\Admin\Parent;

use App\Models\ParentUser;
use Illuminate\Http\RedirectResponse;

class DestroyController extends BaseController
{
    public function __invoke($id): RedirectResponse
    {
        ParentUser::destroy($id);

        return redirect()->route('admin.parents.index')->with('status', 'Parent deleted successfully!');
    }
}
