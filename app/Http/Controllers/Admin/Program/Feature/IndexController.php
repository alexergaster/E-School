<?php

namespace App\Http\Controllers\Admin\Program\Feature;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke($id_program): view
    {
        $program = Program::findOrFail($id_program);
        $features = $program->features;

        return view('admin.program.feature.index', compact('program', 'features'));
    }
}
