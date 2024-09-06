<?php

namespace App\Http\Controllers;

use App\Models\ParentUser;
use App\Models\Program;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index() : view
    {
        $programs = Program::all();
        $parents = ParentUser::whereNotNull('review')->get();

        return view('home', compact('programs', 'parents'));
    }
}
