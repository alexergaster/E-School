<?php

namespace App\Services\Admin\Group\Journal;

use App\Models\Lesson;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class Service
{
    public function destroy(int $lesson): RedirectResponse
    {
        $lesson = Lesson::findOrFail($lesson);

        try{
            DB::beginTransaction();

            $lesson->attendances()->delete();
            $lesson->delete();

            DB::commit();
            return redirect()->back()->with('status', 'Lesson deleted successfully!');
        }catch (\Exception $exception){
            DB::rollBack();
            return redirect()->back()->with('status', $exception->getMessage());
        }
    }
}
