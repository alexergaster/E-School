<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ParentUser extends Model
{
    use HasFactory;
    protected $table = 'parent_users';
    protected $guarded = false;
    public $timestamps = false;

    public function student(): hasMany
    {
        return $this->hasMany(Student::class, 'parent_user_id');
    }
}
