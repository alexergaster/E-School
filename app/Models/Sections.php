<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sections extends Model
{
    use HasFactory;

    protected $table = 'sections';
    protected $guarded = false;
    public $timestamps = false;

    public function program() : belongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
