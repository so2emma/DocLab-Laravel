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
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Patient name">
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
                    No patient found.
                </div>
            @else
                <hr class="pt-4">
                <h5 class="mb-4">
                    List of Patients
                </h5>
                <div class="row justify-content-center">
                    <div class="card col-11 col-lg-11 py-3 px-4">
                        <div class="">
                            <p class="my-0 px-2"><span class="fw-bold">Patient Name:</span> Oso Emmanuel</p>
                            <p class="my-0 px-2"><span class="fw-bold">Email:</span> osoemmanuel1969@gmail.com</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    @endif



</x-auth-doctor-layout>
