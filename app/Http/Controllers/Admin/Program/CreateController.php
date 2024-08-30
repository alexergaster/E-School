<?php

namespace App\Http\Controllers\Admin\Program;

use App\Models\Program;
use Illuminate\View\View;

class CreateController extends BaseController
{
    public function __invoke(): view
    {
        return view('admin.program.create');
    }
}
