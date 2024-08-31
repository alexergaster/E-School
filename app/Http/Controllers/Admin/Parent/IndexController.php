<?php

namespace App\Http\Controllers\Admin\Parent;

use App\Models\ParentUser;
use Illuminate\View\View;

class IndexController extends BaseController
{
    public function __invoke(): view
    {
        $parents = ParentUser::paginate(15);

        return view('admin.parent.index', compact('parents'));
    }
}
