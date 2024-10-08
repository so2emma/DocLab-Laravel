<?php

namespace App\Http\Controllers\Laboratory;

use Illuminate\View\View;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LabAppointmentController extends Controller
{
    public function pending(): View
    {
        $pending = Auth::guard('laboratory')->user()->appointments->where('status', '=', 'pending');
        return view("laboratory.appointment.pending", ["pending" => $pending]);
    }


    public function confirmed(): View
    {
        $confirmed = Auth::guard('laboratory')->user()->appointments->where('status', '=', 'confirmed');
        return view("laboratory.appointment.confirmed", ["confirmed" => $confirmed]);
    }

    public function completed(): View
    {
        $completed = Auth::guard('laboratory')->user()->appointments->where('status', '=', 'completed');
        return view("laboratory.appointment.completed", ["completed" => $completed]);
    }

    public function show(Appointment $appointment): View
    {
        return view("laboratory.appointment.show", compact("appointment"));
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
