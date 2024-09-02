<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        dd($id);
    }
}
