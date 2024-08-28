<?php

namespace App\Http\Controllers\Program;

use App\Models\Program;
use Illuminate\View\View;

class IndexController extends BaseController
{
    public function __invoke() : view
    {
        $programs = Program::all();

        return view('program.index', compact('programs'));
    }
}
