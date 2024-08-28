<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Program extends Model
{
    use HasFactory;
    protected $table = 'programs';
    protected $guarded = false;
    public $timestamps = false;

    public function sections() : hasMany
    {
      return $this->hasMany(Sections::class);
    }

    public function registration() : belongsToMany
    {
        return $this->belongsToMany(RegistrationMC::class);
    }
}
