<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Workingout extends Model
{
    use HasFactory;

    protected $table = 'workingouts';
    protected $guarded = false;
    public $timestamps = false;

    public function lesson(): belongsTo
    {
        return $this->belongsTo(Lesson::class, 'id_lesson');
    }

    public function student(): belongsTo
    {
        return $this->belongsTo(Student::class, 'id_student');
    }

    public function teacher(): belongsTo
    {
        return $this->belongsTo(Staff::class, 'id_teacher');
    }
}
