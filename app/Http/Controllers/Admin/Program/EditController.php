<?php

namespace App\Http\Controllers\Admin\Program;

use App\Models\Program;
use Illuminate\View\View;

class EditController extends BaseController
{
    public function __invoke($id): view
    {
        $program = Program::find($id);

        return view('admin.program.edit', compact('program'));
    }
}
