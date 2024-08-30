<?php

namespace App\Http\Controllers\Admin\Program\Section;


use App\Http\Requests\Program\Section\SectionRequest;
use App\Models\Sections;
use Illuminate\Http\RedirectResponse;

class UpdateController extends BaseController
{
    public function __invoke($program, $id, SectionRequest $sectionRequest): RedirectResponse
    {
        $data = $sectionRequest->validated();

        $section = Sections::findOrFail($id);

        $section->update($data);

        return redirect()->route('admin.sections.index', $program)->with('status', "Section №${id} updated successfully!");
    }
}
