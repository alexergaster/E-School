<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Models\Gallery;
use Illuminate\View\View;

class IndexController extends BaseController
{
    public function __invoke(): view
    {
        $gallery = Gallery::paginate(10);

        return view('admin.gallery.index', compact('gallery'));
    }
}
