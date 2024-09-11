<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\DoctorAuthController;
use App\Http\Controllers\Doctor\DocAppointmentController;
use App\Http\Controllers\Doctor\DocDashController;
use App\Http\Controllers\Doctor\DocLaboratoryController;
use App\Http\Controllers\Doctor\DocPatientController;

Route::prefix("doctor")->name("doctor.")->group(function () {
    Route::group(["middleware" => "guest:doctor"], function () {

        // login routes
        Route::get("login", [DoctorAuthController::class, "showLoginForm"])->name("login");
        Route::post("login", [DoctorAuthController::class, "login"])->name("login");

        // register routes
        Route::get("register", [DoctorAuthController::class, "showRegistrationForm"])->name("register");
        Route::post("register", [DoctorAuthController::class, "register"])->name("register");
    });

    Route::group(["middleware" => "auth:doctor"], function () {

        // logout route
        Route::post("logout", [DoctorAuthController::class, "logout"])->name("logout");

        Route::get("dashboard", [DocDashController::class, "dashboard"])->name("dashboard");

        //for patients
        Route::get("patients/index", [DocPatientController::class, "index"])->name("patient.index");
        Route::get("patients/search", [DocPatientController::class, "index_search"])->name("patient.search");
        Route::get("patients/search/{patient}", [DocPatientController::class, "show"])->name("patient.show");

        //for laboratories
        Route::get("laboratory/index", [DocLaboratoryController::class, "index"])->name("laboratory.index");
        Route::get("laboratory/search", [DocLaboratoryController::class, "index_search"])->name("laboratory.search");
        Route::get("laboratory/search/{laboratory}", [DocLaboratoryController::class, "show"])->name("laboratory.show");

        //for appointment
        Route::get("appointment/view", [DocAppointmentController::class, "index"])->name("appointment.index");
        Route::get("appointment/show/{appointment}", [DocAppointmentController::class, "show"])->name("appointment.show");
        Route::get("appointments/create/{laboratory}", [DocAppointmentController::class, "create"])->name("appointment.create");
        Route::post("appointments/store", [DocAppointmentController::class, "store"])->name("appointment.store");
    });
});

