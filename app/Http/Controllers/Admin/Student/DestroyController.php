<?php

namespace App\Http\Controllers\Admin\Student;

use App\Models\Student;
use Illuminate\Http\RedirectResponse;

class DestroyController extends BaseController
{
    public function __invoke($id): RedirectResponse
    {
        Student::destroy($id);

        return redirect()->route('admin.students.index')->with('status', 'Student deleted successfully!');
    }
}
