<?php

namespace App\Http\Controllers\Admin\Program\Feature;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureRequest;
use App\Models\FeatureProgram;
use App\Models\Program;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    public function __invoke($id_program, FeatureRequest $featureRequest): RedirectResponse
    {
        $data = $featureRequest->validated();
        $program = Program::findOrFail($id_program);

        $data['program_id'] = $id_program;

        FeatureProgram::create($data);

        return redirect()->route('admin.features.index', $program->id)->with('status', 'Feature created successfully!');
    }
}
