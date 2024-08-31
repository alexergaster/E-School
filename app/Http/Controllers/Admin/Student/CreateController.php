<?php

namespace App\Http\Controllers\Admin\Student;

use App\Models\ParentUser;
use Illuminate\View\View;

class CreateController extends BaseController
{
    public function __invoke(): view
    {
        $parents = ParentUser::all();

        return view('admin.student.create', compact('parents'));
    }
}
