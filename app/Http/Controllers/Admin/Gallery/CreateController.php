<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Models\Gallery;
use Illuminate\View\View;

class CreateController extends BaseController
{
    public function __invoke(): view
    {
        return view('admin.gallery.create');
    }
}
