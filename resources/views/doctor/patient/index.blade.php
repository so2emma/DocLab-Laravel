<x-auth-doctor-layout>
    <x-slot:title>
        Show Patients
    </x-slot:title>

    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="card col-11  col-lg-8">
                <div class="card-body">
                    <h5 class="card-title">Find Patients</h5>

                    <form action="{{ route('doctor.patient.search') }}" method="GET">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" id="name" value="{{ request("name") }}" placeholder="Enter Patient name">
                        </div>
                        <button class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if (isset($patients))
        <div class="container ">
            @if ($patients->isEmpty())
            <div class="alert alert-danger m-3">
                @if (request()->has('name') || request()->has('state') || request()->has('city'))
                    <p>No laboratories found matching your search criteria.</p>
                @else
                    <p>Please enter search criteria to find laboratories.</p>
                @endif
            </div>
            @else
                <hr class="pt-4">
                <h5 class="m-4">
                    List of Patients
                </h5>
                @foreach ($patients as $patient)
                <a class="text-decoration-none" href="{{ route("doctor.patient.show", ["patient" => $patient]) }}">
                    <div class="row justify-content-center my-2">
                        <div class="card col-11 col-lg-11 py-3 px-4">
                            <div class="">
                                <p class="my-0 px-2"><span class="fw-bold">Patient Name:</span> {{ $patient->name }}</p>
                                <p class="my-0 px-2"><span class="fw-bold">Email:</span> {{ $patient->email }}</p>
                            </div>
                        </div>
                    </div>
                </a>

                @endforeach

            @endif
        </div>
    @endif
</x-auth-doctor-layout>
