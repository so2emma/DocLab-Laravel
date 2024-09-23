<?php

namespace App\Http\Controllers\Patient;

use Illuminate\View\View;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PatientAppointmentController extends Controller
{
    public function pending(): View
    {
        $pending = Auth::guard('patient')->user()->appointments->where('status', '=', 'pending');
        return view("patient.appointment.pending", ["pending" => $pending]);
    }


    public function confirmed(): View
    {
        $confirmed = Auth::guard('patient')->user()->appointments->where('status', '=', 'confirmed');
        return view("patient.appointment.confirmed", ["confirmed" => $confirmed]);
    }

    public function completed(): View
    {
        $completed = Auth::guard('patient')->user()->appointments->where('status', '=', 'completed');
        return view("patient.appointment.completed", ["completed" => $completed]);
    }

    public function show(Appointment $appointment): View
    {
        return view("patient.appointment.show", compact("appointment"));
    }

    public function update_status(Request $request, Appointment $appointment)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,cancelled,completed',
        ]);

        $appointment->status = $validated['status'];
        $appointment->save();

        return redirect()->back()->with('success', 'Appointment status updated successfully!');
    }

    public function cancel_appointment() {}
}
