<x-auth-doctor-layout>
    <x-slot:title>
        Dashboard
    </x-slot:title>

    <div class="container mt-4 ps-0 ps-md-5 mb-5">
        <h1 class="fw-light text-secondary">
            WELCOME <span class="fw-medium text-dark">{{ $doctor->name }} !</span>
        </h1>

        <div class="row mt-3">
            <p class="fw-bold mb-0">BIO</p>
            <p class="fw-medium col-11 col-8">
                {{ $doctor->bio }}
            </p>
        </div>


        <div class="container-fluid mt-3" >
            <p class="fw-bold border-bottom border-secondary pb-3">PROFILE DETAILS</p>

            <div class="row justify-content-evenly gap-3">

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">GENDER</p>
                    <p class="fw-bold ">{{ $doctor->gender }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">DOB</p>
                    <p class="fw-bold ">{{ $doctor->date_of_birth }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">EMAIL</p>
                    <p class="fw-bold ">{{ $doctor->email }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">PHONE NO.</p>
                    <p class="fw-bold ">{{ $doctor->phone }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">SPECIALIZATION</p>
                    <p class="fw-bold ">{{ $doctor->specialization }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">NO. YEARS OF EXP.</p>
                    <p class="fw-bold ">{{ $doctor->years_of_experience }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">QUALIFICATION</p>
                    <p class="fw-bold ">{{ $doctor->qualification }}</p>
                </div>

                <div class=" card shadow col-11 col-md-5 pt-3 px-5">
                    <p class="fw-bold text-secondary border-bottom border-secondary">ADDRESS</p>
                    <p class="fw-bold ">{{ $doctor->address }}</p>
                </div>

            </div>
        </div>
    </div>
</x-auth-doctor-layout>
