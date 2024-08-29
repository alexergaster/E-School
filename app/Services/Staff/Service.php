<?php

namespace App\Services\Staff;

use App\Models\Staff;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;


class Service
{
    public function store($data, $request): void
    {
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images/staff'), $filename);
        $data['image'] = $filename;

        $data['password'] = Hash::make($data['password']);

        Staff::create($data);
    }

    public function update($staff, $data, $request): void
    {
        if ($request->hasFile('image')) {
            if ($staff->image !== 'default.avif') {
                File::delete(public_path('images/staff/' . $staff->image));
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/staff'), $filename);
            $data['image'] = $filename;
        }

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $staff->update($data);
    }

    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);

        if ($staff->image !== 'default.avif') {
            File::delete(public_path('images/staff/' . $staff->image));
        }

    }
}
