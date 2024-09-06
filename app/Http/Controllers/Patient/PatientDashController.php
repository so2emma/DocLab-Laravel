<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientDashController extends Controller
{
    public function dashboard()
    {
        return view("patient.dashboard");
    }
}
