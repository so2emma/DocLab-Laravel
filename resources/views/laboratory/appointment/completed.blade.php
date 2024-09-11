<x-auth-laboratory-layout>
    <x-slot:title>
        Completed Appointment
    </x-slot:title>


    @if (isset($completed))
        <div class="container ">
            @if ($completed->isEmpty())
                <div class="alert alert-danger m-3">
                    No completed appointment
                </div>
            @else
                <hr class="pt-4">
                <h5 class="mb-4">
                    Completed appointments
                </h5>
                @foreach ($completed as $appointment)
                    <a class="text-decoration-none" href="{{ route("laboratory.appointment.show", ["appointment" => $appointment]) }}">
                        <div class="row justify-content-center my-2">
                            <div class="card col-11 col-lg-11 py-3 px-4">
                                <div class="">
                                    <p class="my-0 px-2"><span class="fw-bold">Patient Name:</span>
                                        {{ $appointment->patient->name }}
                                    </p>
                                    <p class="my-0 px-2"><span class="fw-bold">Laboratory Name:</span>
                                        {{ $appointment->laboratory->name }}
                                    </p>
                                    <p class="my-0 px-2"><span class="fw-bold">Appointment day:</span>
                                        {{ $appointment->appointment_date }}
                                    </p>
                                    <p class="my-0 px-2"><span class="fw-bold">Appointment time:</span>
                                        {{ $appointment->appointment_time->format('h:i A') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
                <!-- Pagination Links -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $completed->links() }}
                </div>
            @endif

        </div>
    @endif

</x-auth-laboratory-layout>
