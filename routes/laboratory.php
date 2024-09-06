<?php

use App\Http\Controllers\Auth\LabAuthController;
use App\Http\Controllers\Laboratory\LabDashController;
use Illuminate\Support\Facades\Route;


Route::prefix("laboratory")->name("laboratory.")->group(function () {
    Route::group(["middleware" => "guest:laboratory"], function () {

        // login routes
        Route::get("login", [LabAuthController::class, "showLoginForm"])->name("login");
        Route::post("login", [LabAuthController::class, "login"])->name("login");

        // register routes
        Route::get("register", [LabAuthController::class, "showRegistrationForm"])->name("register");
        Route::post("register", [LabAuthController::class, "register"])->name("register");
    });

    Route::group(["middleware" => "auth:laboratory"], function () {

        // logout route
        Route::post("logout", [LabAuthController::class, "logout"])->name("logout");

        Route::get("dashboard", [LabDashController::class, "dashboard"])->name("dashboard");
    });
});



