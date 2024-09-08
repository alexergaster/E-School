<?php

namespace App\Http\Controllers\Admin\Program\Feature;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\View\View;

class CreateController extends Controller
{
    public function __invoke($id_program): view
    {
        $program = Program::findOrFail($id_program);

        return view('admin.program.feature.create', compact('program'));
    }
}
