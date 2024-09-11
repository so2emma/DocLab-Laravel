<?php

namespace App\Http\Controllers\Laboratory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LabDashController extends Controller
{
    public function dashboard()
    {
        $laboratory = Auth::guard('laboratory')->user();
        return view("laboratory.dashboard", ['laboratory' => $laboratory]);
    }
}
