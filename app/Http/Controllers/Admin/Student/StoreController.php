<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;

class StoreController extends BaseController
{
    public function __invoke(StudentRequest $storeRequest): RedirectResponse
    {
        $data = $storeRequest->validated();

        Student::create($data);

        return redirect()->route('admin.students.index')->with('status', 'Student created successfully!');
    }
}
