<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendance extends Model
{
    use HasFactory;
    protected $table = 'attendances';
    protected $guarded = false;
    public $timestamps = false;


    public function lesson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class, 'id_lesson');
    }

    // Визначення зв'язку з таблицею Student
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'id_student');
    }
}
