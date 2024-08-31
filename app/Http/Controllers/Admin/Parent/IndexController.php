<?php

namespace App\Http\Controllers\Admin\Parent;

use App\Models\ParentUser;

use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends BaseController
{
    public function __invoke(Request $request): view
    {
        $search = $request->input('search');

        $parents = ParentUser::when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })->paginate(10);

        return view('admin.parent.index', compact('parents'));
    }
}
