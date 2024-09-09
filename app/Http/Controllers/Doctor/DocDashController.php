<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocDashController extends Controller
{
    public function dashboard()
    {
        $doctor = Auth::guard('doctor')->user();
        return view("doctor.dashboard", ["doctor" => $doctor]);
    }
}
