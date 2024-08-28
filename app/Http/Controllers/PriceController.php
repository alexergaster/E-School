<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\View\View;

class PriceController extends Controller
{
    public function index(): view
    {
        $programs = Program::all();

        return view('price', compact('programs'));
    }
}
