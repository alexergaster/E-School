<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\View\View;

class StaffController extends Controller
{
    public function index() : view
    {
        $staffs = Staff::all();
        return view('staff.index', compact('staffs'));
    }
}
