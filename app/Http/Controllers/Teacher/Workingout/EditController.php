<?php

namespace App\Http\Controllers\Teacher\Workingout;

use App\Models\Workingout;
use Illuminate\Http\RedirectResponse;

class EditController
{
    public function __invoke($id_teacher, $id_workingout): RedirectResponse
    {
        $workingout = Workingout::findOrFail($id_workingout);
    
        $workingout->update([
            'present' => $workingout->present ? 0 : 1,
        ]);

        return redirect()->route('teacher.workingout.index', $id_teacher);

    }
}
