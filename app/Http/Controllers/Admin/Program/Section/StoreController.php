<?php

namespace App\Http\Controllers\Admin\Program\Section;

use App\Http\Requests\Program\Section\SectionRequest;
use App\Models\Program;
use App\Models\Sections;
use Illuminate\View\View;

class StoreController extends BaseController
{
    public function __invoke($program_id, SectionRequest $sectionRequest): view
    {
        $data = $sectionRequest->validated();

        $program = Program::find($program_id);

        Sections::create($data);

        $sections = $program->sections;

        return view('admin.program.section.index', compact('program', 'sections'))->with('status', 'Section created successfully!' );
    }
}
