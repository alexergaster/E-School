<?php

namespace App\Http\Controllers\Admin\Program\Section;

use App\Models\Program;
use App\Models\Sections;
use Illuminate\View\View;

class DestroyController extends BaseController
{
    public function __invoke($program, $id): view
    {
        Sections::destroy($id);
        $program = Program::find($program);
        $sections = $program->sections;

        return view('admin.program.section.index', compact('program', 'sections'));
    }
}
