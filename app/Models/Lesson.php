<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lesson extends Model
{
    use HasFactory;

    protected $table = 'lessons';
    protected $guarded = false;
    public $timestamps = false;

    public function group(): belongsTo
    {
        return $this->belongsTo(Group::class, 'id_group');
    }

    public function teacher(): belongsTo
    {
        return $this->belongsTo(Staff::class, 'id_teacher');
    }

    public function attendances(): hasMany
    {
        return $this->hasMany(Attendance::class, 'id_lesson');
    }

    public function students(): belongsToMany
    {
        return $this->belongsToMany(Student::class, 'attendances', 'id_lesson', 'id_student')
            ->withPivot('present');
    }

    public function workingouts(): hasMany
    {
        return $this->hasMany(Workingout::class, 'id_lesson');
    }
}
