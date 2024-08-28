<?php

namespace App\Http\Controllers\Program;

use App\Models\Program;
use Illuminate\View\View;

class ShowController extends BaseController
{
    public function __invoke(Program $program) : view
    {
        $sections = $program->sections;

        return view('program.show', compact(['program', 'sections']));
    }
}
