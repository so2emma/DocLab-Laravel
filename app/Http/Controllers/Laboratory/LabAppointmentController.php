<?php

namespace App\Http\Controllers\Laboratory;

use Illuminate\View\View;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LabAppointmentController extends Controller
{
    public function pending(): View
    {
        $pending = Appointment::where('status', '=', 'pending')
            ->with(['patient', 'laboratory'])
            ->paginate(7);
        return view("laboratory.appointment.pending", ["pending" => $pending]);
    }


    public function confirmed(): View
    {
        $confirmed = Appointment::where('status', '=', 'confirmed')
            ->with(['patient', 'laboratory'])
            ->paginate(7);
        return view("laboratory.appointment.confirmed", ["confirmed" => $confirmed]);
    }

    public function completed(): View
    {
        $completed = Appointment::where('status', '=', 'completed')
            ->with(['patient', 'laboratory'])
            ->paginate(7);
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
