<?php

namespace App\Http\Controllers\Admin\Student;

use App\Models\Student;
use Illuminate\View\View;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Request $request): view
    {
        $search = $request->input('search');

        $students = Student::with('parent')->when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })->paginate(10);

        return view('admin.student.index', compact('students'));
    }
}
