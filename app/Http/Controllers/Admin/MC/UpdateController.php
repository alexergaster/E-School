<?php

namespace App\Http\Controllers\Admin\MC;

use App\Http\Requests\MC\UpdateRequest;
use App\Models\RegistrationMC;
use Illuminate\View\View;

class UpdateController extends BaseController
{
    public function __invoke($id, UpdateRequest $updateRequest): view
    {
        $data = $updateRequest->validated();

        RegistrationMC::findOrFail($id)->update($data);

        $mcs = RegistrationMC::with('program')->get();

        return view('admin.mc.index', compact('mcs'))->with('status', 'Comment update successfully!');
    }
}
