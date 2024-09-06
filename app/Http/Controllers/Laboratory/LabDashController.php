<?php

namespace App\Http\Controllers\Laboratory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LabDashController extends Controller
{
    public function dashboard()
    {
        return view("laboratory.dashboard");
    }
}
