<?php

namespace App\Http\Controllers\Admin\Workingout;

use App\Models\Workingout;
use Illuminate\Http\RedirectResponse;

class DestroyController
{
    public function __invoke($id): RedirectResponse
    {
        $workingout = Workingout::findOrFail($id);

        $workingout->delete();

        return redirect()->route('admin.workingout.index')->with('status', 'Working-out deleted successfully!');
    }
}
