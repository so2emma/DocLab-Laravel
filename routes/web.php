<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\DoctorAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("doctor/login", [DoctorAuthController::class, "showLoginForm"])->name("docLogin");
Route::get("doctor/Register", [DoctorAuthController::class, "register"])->name("docRegister");
Route::post("doctor/login", [DoctorAuthController::class, "login"])->name("docLogin");
Route::post("doctor/Register", [DoctorAuthController::class, "register"])->name("docRegister");
Route::post("doctor/logout", [DoctorAuthController::class, "logout"])->name("docLogout");
