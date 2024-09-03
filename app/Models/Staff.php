<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    use HasFactory;

    protected $table = 'staff';
    protected $guarded = false;
    public $timestamps = false;

    public function groups(): hasMany
    {
        return $this->hasMany(Group::class, 'teacher_id', 'id');
    }

    public function lessons(): hasMany
    {
        return $this->hasMany(Lesson::class, 'id_teacher');
    }


}
