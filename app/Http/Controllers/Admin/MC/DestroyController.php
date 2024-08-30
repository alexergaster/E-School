<?php

namespace App\Http\Controllers\Admin\MC;

use App\Models\RegistrationMC;
use Illuminate\Http\RedirectResponse;

class DestroyController extends BaseController
{
    public function __invoke($id): RedirectResponse
    {
        $mc = RegistrationMC::findOrFail($id);

        $mc->delete();

        return redirect()->route('admin.mc.index')->with('status', 'Користувача та його програми видалено.');
    }
}
