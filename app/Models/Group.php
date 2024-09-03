<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';
    protected $guarded = false;
    public $timestamps = false;

    public function teacher(): HasOne
    {
        return $this->hasOne(Staff::class, 'id', 'teacher_id');
    }

    public function program(): HasOne
    {
        return $this->hasOne(Program::class, 'id', 'program_id');
    }

    public function students(): belongsToMany
    {
        return $this->belongsToMany(Student::class, 'group_student', 'group_id', 'student_id');
    }

    public function lessons(): hasMany
    {
        return $this->hasMany(Lesson::class, 'id_group');
    }
}
