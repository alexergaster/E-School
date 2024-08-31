<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;

class UpdateController extends BaseController
{
    public function __invoke($id, StudentRequest $storeRequest): RedirectResponse
    {
        $data = $storeRequest->validated();

        $student = Student::findOrFail($id);
        $student->update($data);

        return redirect()->route('admin.students.index')->with('status', 'Student updated successfully!');
    }
}
