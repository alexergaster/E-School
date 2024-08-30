<?php

namespace App\Http\Controllers\Admin\Program;

use App\Models\Program;
use Illuminate\View\View;

class IndexController extends BaseController
{
    public function __invoke(): view
    {
        $programs = Program::all();

        return view('admin.program.index', compact('programs'));
    }
}
