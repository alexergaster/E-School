<?php

namespace App\Http\Controllers\Admin\Program\Feature;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\RedirectResponse;

class DestroyController extends Controller
{
    public function __invoke($id_program, $id): RedirectResponse
    {
        $program = Program::findOrFail($id_program);
        $feature = $program->features()->findOrFail($id);

        $feature->delete();

        return redirect()->route('admin.features.index', $program->id)->with('status', 'Feature deleted successfully!');
    }
}
