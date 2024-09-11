<x-auth-laboratory-layout>
    <x-slot:title>
        Dashboard
    </x-slot:title>


    <div class="container mt-4 ps-0 ps-md-5 mb-5">
        <h1 class="fw-light text-secondary">
            WELCOME <span class="fw-medium text-dark">{{ $laboratory->name }} !</span>
        </h1>

        <div class="container-fluid mt-3">
            <p class="fw-bold border-bottom border-secondary pb-3">PROFILE DETAILS</p>

            <div class="row justify-content-evenly gap-3">

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">EMAIL</p>
                    <p class="fw-bold ">{{ $laboratory->email }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">PHONE NO.</p>
                    <p class="fw-bold ">{{ $laboratory->phone }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">CITY</p>
                    <p class="fw-bold ">{{ $laboratory->city }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">STATE</p>
                    <p class="fw-bold ">{{ $laboratory->state }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">STATE</p>
                    <p class="fw-bold ">{{ $laboratory->country }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">ADDRESS</p>
                    <p class="fw-bold ">{{ $laboratory->address }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">EMAIL</p>
                    <p class="fw-bold ">{{ $laboratory->email }}</p>
                </div>

            </div>
        </div>
    </div>
</x-auth-laboratory-layout>
