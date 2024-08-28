<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RegistrationMC extends Model
{
    use HasFactory;

    protected $table = 'registration_m_c_s';
    protected $guarded = false;
    public $timestamps = false;

    public function program() : belongsToMany
    {
        return $this->belongsToMany(Program::class);
    }
}
