<?php

namespace App\Services\Teacher\Group;



use App\Models\Group;
use App\Models\Staff;

class Service
{
    public function index(Staff $teacher)
    {
        if(request()->has('all_groups')){
           return Group::with('program', 'teacher')->get();
        }else{
            return $teacher->groups;
        }
    }
}
