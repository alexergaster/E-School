<?php

namespace App\Http\Controllers\Admin\Program\Section;

use Illuminate\View\View;

class CreateController extends BaseController
{
    public function __invoke($program): view
    {
        return view('admin.program.section.create', compact('program'));
    }
}
