<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationMC extends Model
{
    use HasFactory;

    protected $table = 'registration_m_k_s';
    protected $guarded = false;
    public $timestamps = false;
}
