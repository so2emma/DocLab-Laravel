<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "email",
        "phone",
        "address",
        "date_of_birth",
        "gender",
        "password",

        // not nullable
        "blood_type",
        "allergies",
        "chronic_conditions",
        "current_medications",
        "previous_surgeries",
        "family_medical_history",
        "emergency_contact_name",
        "emergency_contact_relationship",
        "emergency_contact_phone_number",
        "preferred_language",
        "insurance_details",
        "marital_status",

    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
