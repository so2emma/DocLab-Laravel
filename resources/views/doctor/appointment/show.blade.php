<x-auth-doctor-layout>
    <x-slot:title>
        Appointment details
    </x-slot:title>

    
    <div class="container mt-4 ps-0 ps-md-5 mb-5">
        <h1 class="fw-light text-secondary">
            <span class="fw-medium text-dark">Appointment id #{{ $appointment->id }}</span>
        </h1>

        <div class="container mt-3">
            <hr class="fw-bold">

            <div>
                <p> <span class="fw-bold">PATIENT NAME:</span> {{ $appointment->patient->name }}</p>
                <p> <span class="fw-bold">PATIENT EMAIL:</span> {{ $appointment->patient->email }}</p>
                <p> <span class="fw-bold">REFERRING DOCTOR:</span> {{ $appointment->doctor->name }}</p>
                <p> <span class="fw-bold">LABORATORY:</span> {{ $appointment->laboratory->name }}</p>
                <p> <span class="fw-bold">LABORATORY ADDRESS:</span> {{ $appointment->laboratory->address }}</p>
                <p> <span class="fw-bold">APPOINTMENT DATE:</span> {{ $appointment->appointment_date }}</p>
                <p> <span class="fw-bold">APPOINTMENT TIME:</span> {{ $appointment->appointment_time->format('h:i A') }}</p>
                <p> <span class="fw-bold">TEST RECOMMENDATION:</span> {{ $appointment->test->name }}</p>
                <p> <span class="fw-bold">TEST DESCRIPTION:</span> {{ $appointment->test->description }}</p>
            </div>
        </div>
    </div>
</x-auth-doctor-layout>
