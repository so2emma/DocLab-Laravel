<?php

use App\Http\Controllers\Auth\LabAuthController;
use App\Http\Controllers\Laboratory\LabAppointmentController;
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

        //Laboratory routes
        Route::get("appointment/pending", [LabAppointmentController::class, "pending"])->name("appointment.pending");
        Route::get("appointment/confirmed", [LabAppointmentController::class, "confirmed"])->name("appointment.confirmed");
        Route::get("appointment/completed", [LabAppointmentController::class, "completed"])->name("appointment.completed");

        Route::get("appointment/show/{appointment}", [LabAppointmentController::class, "show"])->name("appointment.show");

        Route::get("appointment/edit/{appointment}", [LabAppointmentController::class, "edit"])->name("appointment.edit");
        Route::post("appointment/update", [LabAppointmentController::class, "update"])->name("appointment.update");
        Route::post("appointment/cancel", [LabAppointmentController::class, "cancel_appointment"])->name("appointment.cancel");

        Route::post("appointment/status/{appointment}", [LabAppointmentController::class, "update_status"])->name("appointment.status");
    });
});



