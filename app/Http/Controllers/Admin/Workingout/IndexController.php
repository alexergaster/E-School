<?php

namespace App\Http\Controllers\Admin\Workingout;

use App\Models\Lesson;
use App\Models\Workingout;
use Illuminate\View\View;
use Illuminate\Http\Request;
class IndexController
{
    public function __invoke(Request $request): view
    {
        $search = $request->input('search');

        $workingouts = Workingout::with(['lesson', 'teacher', 'student'])
            ->orderBy('date', 'desc')
            ->paginate(10);

        return view('admin.workingout.index', compact('workingouts'));
    }
}
