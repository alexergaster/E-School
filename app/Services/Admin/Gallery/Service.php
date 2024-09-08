<?php

namespace App\Services\Admin\Gallery;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store(array $data)
    {
        $file = $data['image']->store('images/gallery', 'public');
        $data['image'] = $file;

        Gallery::create($data);
    }

    public function destroy(int $id)
    {
        $photo = Gallery::findOrFail($id);

        Storage::delete('public/' . $photo->image);

        $photo->destroy($id);
    }
}
