<?php

namespace App\Http\Controllers\Patient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PatientDashController extends Controller
{
    public function dashboard()
    {
        $patient = Auth::guard('patient')->user();
        return view("patient.dashboard", ["patient" => $patient]);
    }
}
