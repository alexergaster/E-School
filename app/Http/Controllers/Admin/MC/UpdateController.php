<?php

namespace App\Http\Controllers\Admin\MC;

use App\Http\Requests\MC\UpdateRequest;
use App\Models\RegistrationMC;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UpdateController extends BaseController
{
    public function __invoke($id, UpdateRequest $updateRequest): RedirectResponse
    {
        $data = $updateRequest->validated();

        RegistrationMC::findOrFail($id)->update($data);

        return redirect()->route('admin.mc.index')->with('status', 'Comment update successfully!');
    }
}
