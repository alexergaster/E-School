<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
