<x-auth-doctor-layout>
    <x-slot:title>
        Show Laboratories
    </x-slot:title>

    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="card col-11  col-lg-8">
                <div class="card-body">
                    <h5 class="card-title">Find Laboratories</h5>

                    <form action="{{ route('doctor.laboratory.search') }}" method="GET">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="mb-3">
                                <input type="text" class="form-control" value="{{ request('name') }}" name="name"
                                    placeholder="Enter name">
                            </div>
                            <div class="mb-3 col-6">
                                <input type="text" class="form-control" value="{{ request('state') }}" name="state"
                                    placeholder="Enter State">
                            </div>
                            <div class="mb-3 col-6">
                                <input type="text" class="form-control" value="{{ request('city') }}" name="city"
                                    placeholder="Enter City">
                            </div>
                        </div>

                        <button class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if (isset($laboratories))
        <div class="container ">
            @if ($laboratories->isEmpty())
                <div class="alert alert-danger m-3">
                    @if (request()->has('name') || request()->has('state') || request()->has('city'))
                        <p>No laboratories found matching your search criteria.</p>
                    @else
                        <p>Please enter search criteria to find laboratories.</p>
                    @endif
                </div>
            @else
                <hr class="pt-4">
                <h5 class="mb-4">
                    List of Laboratories
                </h5>
                @foreach ($laboratories as $laboratory)
                    <a class="text-decoration-none" href="{{ route("doctor.laboratory.show", ["laboratory" => $laboratory]) }}">
                        <div class="row justify-content-center my-2">
                            <div class="card col-11 col-lg-11 py-3 px-4">
                                <div class="">
                                    <p class="my-0 px-2"><span class="fw-bold"> Name:</span>
                                        {{ $laboratory->name }}
                                    </p>
                                    <p class="my-0 px-2"><span class="fw-bold">Contact No:</span>
                                        {{ $laboratory->phone }}
                                    </p>
                                    <p class="my-0 px-2"><span class="fw-bold">Contact Location:</span>
                                        {{ $laboratory->address }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

            @endif

        </div>
    @endif


</x-auth-doctor-layout>
