<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $guarded = false;
    public $timestamps = false;

    public function parent(): BelongsTo
    {
        return $this->belongsTo(ParentUser::class, 'parent_user_id');
    }

    public function groups(): belongsToMany
    {
        return $this->belongsToMany(Group::class, 'group_student', 'student_id', 'group_id');
    }

    public function lessons(): belongsToMany
    {
        return $this->belongsToMany(Lesson::class, 'attendances', 'id_student', 'id_lesson')
            ->withPivot('present');
    }

    public function workingouts(): hasMany
    {
        return $this->hasMany(Workingout::class, 'id_student');
    }
}
