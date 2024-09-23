<x-auth-patient-layout>
    <x-slot:title>
        Appointment details
    </x-slot:title>


    <div class="container mt-4 ps-0 ps-md-5 mb-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="fw-light text-secondary">
                <span class="fw-medium text-dark">Appointment id #{{ $appointment->id }}</span>
            </h1>

            <p class="bg-secondary text-white p-3 rounded">
                current status: <span class="fw-bold">{{ $appointment->status }}</span>
            </p>
        </div>


        <div class="container mt-3">
            <hr class="fw-bold">

            <div class="">
                <p> <span class="fw-bold">PATIENT NAME:</span> {{ $appointment->patient->name }}</p>
                <p> <span class="fw-bold">PATIENT EMAIL:</span> {{ $appointment->patient->email }}</p>
                <p> <span class="fw-bold">REFERRING DOCTOR:</span> {{ $appointment->doctor->name }}</p>
                <p> <span class="fw-bold">PATIENT:</span> {{ $appointment->patient->name }}</p>
                <p> <span class="fw-bold">PATIENT ADDRESS:</span> {{ $appointment->patient->address }}</p>
                <p> <span class="fw-bold">APPOINTMENT DATE:</span> {{ $appointment->appointment_date }}</p>
                <p> <span class="fw-bold">APPOINTMENT TIME:</span> {{ $appointment->appointment_time->format('h:i A') }}
                </p>
                <p> <span class="fw-bold">TEST RECOMMENDATION:</span> {{ $appointment->test->name }}</p>
                <p> <span class="fw-bold">TEST DESCRIPTION:</span> {{ $appointment->test->description }}</p>
            </div>

            @if ($appointment->status != 'completed')
                <div>
                    <form action="{{ route('patient.appointment.status', ['appointment' => $appointment]) }}"
                        method="POST">
                        @csrf
                        {{-- @method('PATCH') --}}
                        <div class="row justify-content-center">
                            <div class="mb-3 col-11 col-md-8 col-lg-8 ">
                                <div class="mb-3">
                                    <label for="status" class="form-label fw-bold">Update appointment Status</label>

                                    <select name="status" class="form-select border border-secondary" id="status"
                                        required>
                                        <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>
                                            Pending
                                        </option>
                                        <option value="confirmed" {{ old('status') == 'confirmed' ? 'selected' : '' }}>
                                            Confirmed</option>
                                        <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>
                                            Cancelled</option>
                                        <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>
                                            Completed</option>
                                    </select>


                                    <x-input-error :messages="$errors->get('status')" />
                                </div>


                                <div class="mt-3 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-secondary">Update status</button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            @endif

        </div>
    </div>
</x-auth-patient-layout>
