<?php

namespace App\Services\Staff;

use App\Models\Staff;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class Service
{
    public function store($data, $request): void
    {
        $file = $request->file('image')->store('images/staff', 'public');
        $data['image'] = $file;

        $data['password'] = Hash::make($data['password']);

        Staff::create($data);
    }

    public function update($staff, $data, $request): void
    {
        if ($request->hasFile('image')) {
            if ($staff->image !== 'default.avif') {
                Storage::delete('public/' . $staff->image);
            }

            $file = $request->file('image')->store('images/staff', 'public');
            $data['image'] = $file;
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
            Storage::delete('public/' . $staff->image);
        }

        $staff->destroy($id);
    }
}
