<?php

namespace App\Services\Program;

use App\Models\Program;
use Illuminate\Support\Facades\Storage;

class Service
{

    public function store(mixed $data, $request): void
    {
        $file = $request->file('image')->store('images/programs', 'public');
        $data['image'] = $file;

        Program::create($data);
    }

    public function destroy($id)
    {
        $program = Program::findOrFail($id);

        $sections = $program->sections;

        foreach ($sections as $section) {
            $section->delete();
        }

        $features = $program->features;

        foreach ($features as $feature) {
            $feature->delete();
        }

        Storage::delete('public/' . $program->image);

        $program->destroy($id);
    }

    public function update($id, mixed $data, $request): void
    {
        $program = Program::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $program->image);

            $file = $request->file('image')->store('images/programs', 'public');

            $data['image'] = $file;
        }

        $program->update($data);
    }
}
