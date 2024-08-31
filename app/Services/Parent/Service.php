<?php

namespace App\Services\Parent;

use App\Models\ParentUser;
use Illuminate\Support\Facades\Hash;

class Service
{
    public function update(int $id, array $data): void
    {
        $parent = ParentUser::findOrFail($id);

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $parent->update($data);
    }

    public function store(array $data)
    {
        $data['password'] = Hash::make($data['password']);

        ParentUser::firstOrCreate($data);
    }
}
