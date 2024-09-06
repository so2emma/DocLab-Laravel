<?php

namespace App\Http\Controllers\Auth;

use App\Models\Patient;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class PatientAuthController extends Controller
{
    /**
     *This method navigates to the patient login page
     */
    public function showLoginForm(): View
    {
        return view("patient.login");
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

        if (Auth::guard('patient')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/patient/dashboard')->with('success', 'Login successful');
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.'])->onlyInput('email');
    }

    /**
     *This method navigates to the patient registration page
     */
    public function showRegistrationForm(): View
    {
        return view("patient.register");
    }

    /**
     *This method handles the registration logic
     */
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:patients,email|max:255',
            'phone' => 'required|string|unique:patients,phone|max:20',
            'address' => 'required|string|max:255',
            'date_of_birth' => 'required|date|before:today',
            'gender' => 'required|in:male,female,other',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $patient = Patient::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'date_of_birth' => $validatedData['date_of_birth'],
            'gender' => $validatedData['gender'],
            'password' => Hash::make($validatedData['password']),
        ]);

        Auth::guard('patient')->login($patient);

        return redirect()->intended('patient/dashboard')->with('success', 'Registration successful');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('patient')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('patient.login');
    }
}
