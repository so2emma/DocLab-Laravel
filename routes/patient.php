<?php

use App\Http\Controllers\Auth\PatientAuthController;
use App\Http\Controllers\Patient\PatientDashController;
use Illuminate\Support\Facades\Route;


Route::prefix("patient")->name("patient.")->group(function () {
    Route::group(["middleware" => "guest:patient"], function () {

        // login routes
        Route::get("login", [PatientAuthController::class, "showLoginForm"])->name("login");
        Route::post("login", [PatientAuthController::class, "login"])->name("login");

        // register routes
        Route::get("register", [PatientAuthController::class, "showRegistrationForm"])->name("register");
        Route::post("register", [PatientAuthController::class, "register"])->name("register");
    });

    Route::group(["middleware" => "auth:patient"], function () {

        // logout route
        Route::post("logout", [PatientAuthController::class, "logout"])->name("logout");

        Route::get("dashboard", [PatientDashController::class, "dashboard"])->name("dashboard");
    });
});
