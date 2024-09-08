<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FeatureProgram extends Model
{
    use HasFactory;
    protected $table = 'features_program';
    protected $guarded = false;
    public $timestamps = false;

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
