<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        "name",
        "email",
        "password",
        "phone",
        "specialization",
        "years_of_experience",
        "qualification",
        "bio",
        "profile",
        "gender",
        "date_of_birth",
        "address",
        "availability"
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
