<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Laboratory extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        "name",
        "address",
        "city",
        "state",
        "country",
        "postal_code",
        "contact_number",
        "email",
        "website",
        "password",

        // certification and accreditation
        "license_number",
        "license_expiry",
        "accreditation_body",

        //operational details
        "operational_hours",
        "services_offerred",
        "specializations",
        "status"
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
