<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Laboratory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DocLaboratoryController extends Controller
{
    //
    public function index(): View
    {
        return view("doctor.laboratory.index");
    }


    public function index_search(Request $request): View
    {
        $laboratories = collect();

        if ($request->filled('name') || $request->filled('state') || $request->filled('city')) {
            $query = Laboratory::query();

            if ($request->filled('name')) {
                $query->where('name', 'like', '%' . $request->input('name') . '%');
            }

            if ($request->filled('state')) {
                $query->where('state', 'like', '%' . $request->input('state') . '%');
            }

            if ($request->filled('city')) {
                $query->where('city', 'like', '%' . $request->input('city') . '%');
            }

            $laboratories = $query->get();
        }

        return view('doctor.laboratory.index', ['laboratories' => $laboratories]);
    }

    public function show(Laboratory $laboratory){
        return view("doctor.laboratory.show", ["laboratory" => $laboratory]);
    }
}
