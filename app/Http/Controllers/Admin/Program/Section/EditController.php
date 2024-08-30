<?php

namespace App\Http\Controllers\Admin\Program\Section;

use App\Models\Sections;
use Illuminate\View\View;

class EditController extends BaseController
{
    public function __invoke($program, $id): view
    {
        $section = Sections::findOrFail($id);
        return view('admin.program.section.edit', compact('section', 'program'));
    }
}
