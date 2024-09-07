<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\DoctorAuthController;
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

        //for laboratories
        Route::get("laboratory/index", [DocLaboratoryController::class, "index"])->name("laboratory.index");
    });
});

