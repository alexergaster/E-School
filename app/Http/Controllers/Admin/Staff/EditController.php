<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Controllers\Admin\Program\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EditController extends BaseController
{
    public function __invoke($id): view
    {
        $teacher = Staff::find($id);
        return view('admin.staff.edit', compact('teacher'));
    }
}
