<?php

namespace App\Http\Controllers\Admin\Group\Journal;

use App\Models\Group;
use App\Models\Lesson;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DestroyController extends BaseController
{
    public function  __invoke($id, $lesson): RedirectResponse
    {
        return $this->service->destroy($lesson);
    }
}
