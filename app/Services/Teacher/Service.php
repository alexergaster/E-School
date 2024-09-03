<?php

namespace App\Services\Teacher;



use App\Models\Group;
use App\Models\Staff;

class Service
{
    public function show(Staff $teacher)
    {
        if(request()->has('all_groups')){
           return Group::with('program', 'teacher')->get();
        }else{
            return $teacher->groups;
        }
    }
}
