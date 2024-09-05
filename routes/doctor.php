<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\DoctorAuthController;
use App\Http\Controllers\Doctor\DocDashController;

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
    });
});

