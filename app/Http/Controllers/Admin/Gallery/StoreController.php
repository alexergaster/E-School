<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Requests\GalleryRequest;
use Illuminate\Http\RedirectResponse;

class StoreController extends BaseController
{
    public function __invoke(GalleryRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('admin.gallery.index')->with('status', 'Photo added successfully!');
    }
}
