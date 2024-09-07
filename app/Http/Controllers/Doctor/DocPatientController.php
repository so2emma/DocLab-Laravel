<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DocPatientController extends Controller
{
    public function index(Request $request): View
    {
        return view("doctor.patient.index");
    }

    public function index_search(Request $request): View
    {
        $patients = Patient::where("name", "like", "%".$request->name."%")
                    ->get();
        return view("doctor.patient.index", ["patients" => $patients ]);
    }
}
