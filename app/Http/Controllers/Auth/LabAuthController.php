<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use App\Models\Laboratory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class LabAuthController extends Controller
{
    /**
    *This method navigates to the laboratory login page
    */
    public function showLoginForm(): View
    {
//        dd(view("laboratory.test"));
        return view("laboratory.login");
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

        if (Auth::guard('laboratory')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/laboratory/dashboard')->with('success', 'Login successful');
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.'])->onlyInput('email');
    }

    /**
    *This method navigates to the laboratory registration page
     */
    public function showRegistrationForm(): View
    {
        return view("laboratory.register");
    }

    /**
    *This method handles the registration logic
     */
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:laboratories',
            'phone' => 'required|string|max:255|unique:laboratories',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $laboratory = Laboratory::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'city' => $validatedData['city'],
            'state' => $validatedData['state'],
            'country' => $validatedData['country'],
            'address' => $validatedData['address'],
            'password' => Hash::make($validatedData['password']),
        ]);

        Auth::guard('laboratory')->login($laboratory);

        return redirect()->intended('laboratory/dashboard')->with('success', 'Registration successful');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('laboratory')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('laboratory.login');
    }
}
