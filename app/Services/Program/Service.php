<?php

namespace App\Services\Program;

use App\Models\Program;
use Illuminate\Support\Facades\File;

class Service
{

    public function store(mixed $data, $request): void
    {
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images/programs'), $filename);
        $data['image'] = $filename;

        Program::create($data);
    }

    public function destroy($id)
    {
        $program = Program::findOrFail($id);

        File::delete(public_path('images/programs/' . $program->image));

        $program->destroy($id);
    }

    public function update($id, mixed $data, $request): void
    {
        $program = Program::findOrFail($id);

        if ($request->hasFile('image')) {
            File::delete(public_path('images/programs/' . $program->image));

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/programs'), $filename);
            $data['image'] = $filename;
        }

        $program->update($data);
    }
}
