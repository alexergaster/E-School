<?php

namespace App\Http\Controllers\Gallery;

use App\Models\Gallery;
use Illuminate\View\View;

class IndexController extends BaseController
{
    public function __invoke() : view
    {
        $galleries = Gallery::all();

        $gallery = $this->service->index($galleries);

        return view('gallery.index', compact('gallery'));
    }
}
