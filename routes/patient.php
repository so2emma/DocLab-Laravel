<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PatientAuthController;
use App\Http\Controllers\Patient\PatientDashController;
use App\Http\Controllers\Patient\PatientAppointmentController;


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


        //Patient routes
        Route::get("appointment/pending", [PatientAppointmentController::class, "pending"])->name("appointment.pending");
        Route::get("appointment/confirmed", [PatientAppointmentController::class, "confirmed"])->name("appointment.confirmed");
        Route::get("appointment/completed", [PatientAppointmentController::class, "completed"])->name("appointment.completed");

        Route::get("appointment/show/{appointment}", [PatientAppointmentController::class, "show"])->name("appointment.show");

        Route::get("appointment/edit/{appointment}", [PatientAppointmentController::class, "edit"])->name("appointment.edit");
        Route::post("appointment/update", [PatientAppointmentController::class, "update"])->name("appointment.update");
        Route::post("appointment/cancel", [PatientAppointmentController::class, "cancel_appointment"])->name("appointment.cancel");

        Route::post("appointment/status/{appointment}", [PatientAppointmentController::class, "update_status"])->name("appointment.status");
    });
});
