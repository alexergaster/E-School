<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';
    protected $guarded = false;
    public $timestamps = false;

    public function groups(): hasMany
    {
        return $this->hasMany(Group::class, 'teacher_id', 'id');
    }
}
