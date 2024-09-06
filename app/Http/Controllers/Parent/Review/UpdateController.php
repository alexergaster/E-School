<?php

namespace App\Http\Controllers\Parent\Review;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\ParentUser;
use Illuminate\Http\RedirectResponse;

class UpdateController extends Controller
{
    public function __invoke($id, ReviewRequest $reviewRequest): RedirectResponse
    {
        $data = $reviewRequest->validated();

        $parent = ParentUser::findOrFail($id);

        $parent->update([
            'id' => $id,
            'review' => $data['review']
        ]);

        return redirect()->back();
    }
}
