<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocDashController extends Controller
{
    public function dashboard()
    {
        return view("doctor.dashboard");
    }
}
