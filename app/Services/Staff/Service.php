<?php

namespace App\Services\Staff;

use App\Models\Staff;
use Illuminate\Support\Facades\Hash;

class Service
{
    public function store($data): void
    {
        $data = [...$data, 'image' => '23.png'];
        $data['password'] = Hash::make($data['password']);

        Staff::create($data);
    }

    public function update($staff, $data): void
    {
//        if ($request->hasFile('image')) {
//            // Видалення старого зображення, якщо воно не є значенням за замовчуванням
//            if ($staff->image !== 'def    ault.avif') {
//                Storage::disk('public')->delete($staff->image);
//            }
//            $data['image'] = $request->file('image')->store('staff_images', 'public');
//        }

        if (isset($data['password'])) {
//            dd(Hash::make($data['password']));
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $staff->update($data);
    }
}
