<?php

namespace App\Http\Controllers\Admin\Program\Section;

use App\Models\Program;
use Illuminate\View\View;

class IndexController extends BaseController
{
    public function __invoke($id): view
    {
        $program = Program::findOrFail($id);

        $sections = $program->sections;

        return view('admin.program.section.index', compact('program', 'sections'));
    }
}
