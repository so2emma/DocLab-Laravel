<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laboratories', function (Blueprint $table) {
            $table->id();

            // Laboratory details
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('postal_code');
            $table->string('contact_number');
            $table->string('email')->unique(); // For authentication
            $table->string('phone')->unique();
            $table->string('website')->nullable();

            // Authentication fields
            $table->string('password'); // For storing hashed passwords
            $table->rememberToken(); // For "remember me" functionality

            // Certification & Accreditation
            $table->string('license_number')->nullable();
            $table->date('license_expiry')->nullable();
            $table->string('accreditation_body')->nullable();

            // Operational details
            $table->json('operating_hours')->nullable();
            $table->json('services_offered')->nullable();
            $table->string('specializations')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laboratories');
    }
};
