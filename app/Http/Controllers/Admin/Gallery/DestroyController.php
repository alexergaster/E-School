<?php

namespace App\Http\Controllers\Admin\Gallery;

use Illuminate\Http\RedirectResponse;

class DestroyController extends BaseController
{
    public function __invoke($id): RedirectResponse
    {
        $this->service->destroy($id);

        return redirect()->route('admin.gallery.index')->with('status', 'Photo deleted successfully!');
    }
}
