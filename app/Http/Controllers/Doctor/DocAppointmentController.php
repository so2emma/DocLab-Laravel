<?php

namespace App\Http\Controllers\Doctor;

use App\Models\Laboratory;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Support\Facades\Auth;

class DocAppointmentController extends Controller
{
    public function index(): View
    {
        $pending = Appointment::where('status', '=', 'pending')
            ->with(['patient', 'laboratory'])
            ->paginate(2, ['*'], 'pending_page');

        $confirmed = Appointment::where('status', '=', 'confirmed')
            ->with(['patient', 'laboratory'])
            ->paginate(2, ['*'], 'confirmed_page');

        $completed = Appointment::where('status', '=', 'completed')
            ->with(['patient', 'laboratory'])
            ->paginate(2, ['*'], 'completed_page');

        return view('doctor.appointment.index', compact('pending', 'confirmed', 'completed'));
    }

    public function show(Appointment $appointment): View
    {
        return view("doctor.appointment.show", compact("appointment"));
    }

    public function create(Laboratory $laboratory): View
    {
        return view("doctor.appointment.create", ["laboratory" => $laboratory]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'patient' => 'required|exists:patients,id',
            'test_id' => 'required|exists:tests,id',
            'appointment_date' => 'required|date|after:today',
            'appointment_time' => 'required|date_format:H:i',
        ]);


        $laboratory = Test::find($validatedData['test_id'])->laboratory->id;

        Appointment::create([
            'patient_id' => $validatedData['patient'],

            'doctor_id' => Auth::guard('doctor')->user()->id,
            'laboratory_id' => $laboratory,
            'test_id' => $validatedData['test_id'],
            'appointment_date' => $validatedData['appointment_date'],
            'appointment_time' => $validatedData['appointment_time'],
            'status' => 'pending',
        ]);

        return redirect()->route('doctor.appointment.index')->with('success', 'Appointment booked successfully!');
    }
}
