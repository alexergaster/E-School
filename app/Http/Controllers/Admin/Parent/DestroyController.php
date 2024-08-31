<?php

namespace App\Http\Controllers\Admin\Parent;

use App\Models\ParentUser;
use Illuminate\Http\RedirectResponse;

class DestroyController extends BaseController
{
    public function __invoke($id): RedirectResponse
    {
        $parent = ParentUser::findOrFail($id);

        $students = $parent->student;

        foreach ($students as $student) {
            $student->delete();
        }

        $parent->delete();

        return redirect()->route('admin.parents.index')->with('status', 'Parent and Student deleted successfully!');
    }
}
