<?php

namespace App\Http\Controllers\Admin\Parent;

use App\Models\ParentUser;
use Illuminate\View\View;

class CreateController extends BaseController
{
    public function __invoke(): view
    {
        return view('admin.parent.create');
    }
}
