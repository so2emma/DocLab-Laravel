<?php

namespace App\Http\Controllers\Auth;

use App\Models\Doctor;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoctorAuthController extends Controller
{
    /**
    *This method navigates to the doctor login page
    */
    public function showLoginForm(): View
    {
//        dd(view("doctor.test"));
        return view("doctor.login");
    }

    /**
    *This method handles login for a page
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::guard('doctor')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/doctor/dashboard')->with('success', 'Login successful');
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.'])->onlyInput('email');
    }

    /**
    *This method navigates to the doctor registration page
     */
    public function showRegistrationForm(): View
    {
        return view("doctor.register");
    }

    /**
    *This method handles the registration logic
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|string|email|max:255|unique:doctors',
            'phone' => 'required|string|max:255|unique:doctors',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $doctor = Doctor::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('doctor')->login($doctor);

        return redirect()->intended('doctor/dashboard')->with('success', 'Registration successful');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('doctor')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('doctor.login');
    }
}
